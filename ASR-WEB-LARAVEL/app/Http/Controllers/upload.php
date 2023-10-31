<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asr";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil nilai dari form
$users_id = $_POST['users_id'];
$Author = $_POST['Author'];
$Date = $_POST['Date'];
$Title = $_POST['Title'];
$tag1 = $_POST['tag1'];
$tag2 = $_POST['tag2'];
$tag3 = $_POST['tag3'];
$Content = $_POST['Content'];

// Mengunggah gambar utama
$gambarUtama = $_FILES['gambar']['tmp_name'];
$namaGambarUtama = $_FILES['gambar']['name'];

move_uploaded_file($gambarUtama, 'path/to/upload/directory/' . $namaGambarUtama);

// Menyimpan data ke database
$sql = "INSERT INTO nama_tabel (users_id, Author, Date, Title, tag1, tag2, tag3, Content, gambar) 
        VALUES ('$users_id', '$Author', '$Date', '$Title', '$tag1', '$tag2', '$tag3', '$Content', '$namaGambarUtama')";

if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menyimpan nama gambar tambahan ke database
$gambarTambahan = [];

for ($i = 1; $i <= 8; $i++) {
    $inputName = 'gambar' . $i;

    if (isset($_FILES[$inputName])) {
        $gambar = $_FILES[$inputName]['tmp_name'];
        $namaGambar = $_FILES[$inputName]['name'];

        move_uploaded_file($gambar, 'path/to/upload/directory/' . $namaGambar);

        $gambarTambahan[] = $namaGambar;

        // Menyimpan data ke database
        $sql = "UPDATE nama_tabel SET gambar$i = '$namaGambar' WHERE id = LAST_INSERT_ID()";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();

// Redirect kembali ke route '/AdminArea/news'
header("Location: /AdminArea/news");
exit();
?>
