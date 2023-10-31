<?php

namespace App\Http\Controllers;


use App\Models\blog;
use App\Models\news;
use App\Models\tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\kategori;
use mysqli;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = news::all();
        return view('HalamanAdminArea.news', ['news'=> $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('HalamanAdminArea.CreateNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $users_id = $_POST['users_id'];
    $Author = $_POST['Author'];
    $Date = $_POST['Date'];
    $Title = $_POST['Title'];
    $tag1 = $_POST['tag1'];
    $tag2 = $_POST['tag2'];
    $tag3 = $_POST['tag3'];
    $Content = $_POST['Content'];

    // Menyiapkan direktori upload
    $uploadDirectory = public_path('image/');

    // Memeriksa apakah direktori upload ada, jika tidak, buat direktori baru
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Mengunggah gambar utama
    $gambarUtama = $_FILES['gambar']['tmp_name'];
    $namaGambarUtama = $_FILES['gambar']['name'];

    $gambarUtamaPath = $uploadDirectory . $namaGambarUtama;
    move_uploaded_file($gambarUtama, $gambarUtamaPath);

    // Menyimpan data ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webasr";
    
    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Menyimpan data ke tabel dalam database
    $sql = "INSERT INTO news (users_id, Author, Date, Title, tag1, tag2, tag3, Content, gambar) 
            VALUES ('$users_id', '$Author', '$Date', '$Title', '$tag1', '$tag2', '$tag3', '$Content', '$namaGambarUtama')";

    if ($conn->query($sql) === TRUE) {
        // Menyimpan nama gambar tambahan ke database
        for ($i = 1; $i <= 7; $i++) {
            $inputName = 'gambar' . $i;

            if (isset($_FILES[$inputName])) {
                $gambar = $_FILES[$inputName]['tmp_name'];
                $namaGambar = $_FILES[$inputName]['name'];

                $gambarPath = $uploadDirectory . $namaGambar;
                move_uploaded_file($gambar, $gambarPath);

                $sql = "UPDATE news SET gambar$i = '$namaGambar' WHERE id = LAST_INSERT_ID()";

                if ($conn->query($sql) !== TRUE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi ke database
    $conn->close();

    // Redirect ke halaman /AdminArea/news setelah proses upload selesai
    header("Location: /AdminArea/news");
    exit;
}

    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kategori = kategori::all();
        $tag = tag::all();

        $news = news::find($id);
        return view('HalamanAdminArea.ShowNews', ['news'=> $news, 'kategori' =>$kategori, 'tag' =>$tag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = news::find($id);
        return view('HalamanAdminArea.newsEdit', ['news'=> $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Mendapatkan data dari form
            $users_id = $_POST['users_id'];
            $Author = $_POST['Author'];
            $Date = $_POST['Date'];
            $Title = $_POST['Title'];
            $tag1 = $_POST['tag1'];
            $tag2 = $_POST['tag2'];
            $tag3 = $_POST['tag3'];
            $Content = $_POST['Content'];
            // $id = $_POST['id']; // ID data yang akan diupdate
        
            // Menyiapkan direktori upload
            $uploadDirectory = public_path('image/');
        
            // Memeriksa apakah direktori upload ada, jika tidak, buat direktori baru
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }
        
            // Mengunggah gambar utama jika ada perubahan
            if ($_FILES['gambar']['error'] === 0) {
                $gambarUtama = $_FILES['gambar']['tmp_name'];
                $namaGambarUtama = $_FILES['gambar']['name'];
        
                $gambarUtamaPath = $uploadDirectory . $namaGambarUtama;
                move_uploaded_file($gambarUtama, $gambarUtamaPath);
            } else {
                $namaGambarUtama = ''; // Jika tidak ada perubahan gambar utama, gunakan nilai kosong
            }
        
            // Menyimpan data ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "webasr";
            
            // Membuat koneksi ke database
            $conn = new mysqli($servername, $username, $password, $database);
        
            // Memeriksa koneksi
            if ($conn->connect_error) {
                die("Koneksi ke database gagal: " . $conn->connect_error);
            }
        
            // Memperbarui data di tabel dalam database
            $sql = "UPDATE news SET users_id = '$users_id', Author = '$Author', Date = '$Date', Title = '$Title', 
                    tag1 = '$tag1', tag2 = '$tag2', tag3 = '$tag3', Content = '$Content'";
        
            // Memeriksa apakah ada perubahan pada gambar utama
            if (!empty($namaGambarUtama)) {
                $sql .= ", gambar = '$namaGambarUtama'";
            }
        
            $sql .= " WHERE id = $id";
        
            if ($conn->query($sql) === TRUE) {
                // Mengubah gambar-gambar tambahan jika ada perubahan
                for ($i = 1; $i <= 8; $i++) {
                    $inputName = 'gambar' . $i;
        
                    if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === 0) {
                        $gambar = $_FILES[$inputName]['tmp_name'];
                        $namaGambar = $_FILES[$inputName]['name'];
        
                        $gambarPath = $uploadDirectory . $namaGambar;
                        move_uploaded_file($gambar, $gambarPath);
        
                        $sql = "UPDATE news SET gambar$i = '$namaGambar' WHERE id = $id";
        
                        if ($conn->query($sql) !== TRUE) {
                            echo "Gagal mengubah gambar $i: " . $conn->error;
                        }
                    }
                }
        
                echo "Data berhasil diperbarui";
            } else {
                echo "Gagal memperbarui data: " . $conn->error;
            }
        
            $conn->close();
            header("Location: /AdminArea/news");
             exit;
        }
        

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $news = news::find($id);

        $path ='image/'; 
        File::delete($path .$news->gambar);
        $news->delete();
        return redirect('/AdminArea/news');
            
    }
}
