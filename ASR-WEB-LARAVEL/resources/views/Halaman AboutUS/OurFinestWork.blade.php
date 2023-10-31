@extends('layout.layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Our Finest Work</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: lightslategray;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 30px;
      margin: 0;
    }

    .project-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      padding: 40px;
    }

    .project-card {
      width: 300px;
      height: 650px; /* Added fixed height */
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 20px;
      overflow: hidden;
    }

    .project-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .project-card .project-info {
      padding: 20px;
    }

    .project-card h3 {
      font-size: 24px;
      margin: 0;
      margin-bottom: 10px;
    }

    .project-card p {
      margin: 0;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Our Finest Work</h1>
  </div>
  <br><br>
  <div class="container">
    <hr><hr>
      <div class="headline mt-3 text-center" style=" font-weight: 600; font-weight: bolder; font-size: 40px;">
        Pra ASR
      </div>
<hr>
<hr>
  </div>
  
  <div class="project-container">
    <div class="project-card">
        <img src="{{ asset('/img/foto22.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Seminar Motivasi</h3>
          <p> Seminar Motivasi<br class="d-none d-md-block">
              "Bersahabat Dengan Stress"<br class="d-none d-md-block">
              Pelajar SMP/MTs SMA/SMK/MA Se-Tasikmalaya<br class="d-none d-md-block">
             MA Muhammadiyah Tasikmalaya<br class="d-none d-md-block">
              9 Februari 2014</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto23.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Training Hipnoterapi</h3>
          <p> Training Hipnoterapi Motivasi Pengembangan Diri<br class="d-none d-md-block">
              Ekskul Pusat Informasi Konseling Remaja (PIK-R)<br class="d-none d-md-block">
              Remaja Siaga Kesehatan (RESIK)<br class="d-none d-md-block">
              SMAN 7 Kota Tasikmalaya<br class="d-none d-md-block">
              2015 - 2017 </p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto24.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Training Hipnoterapi</h3>
          <p> Training Hipnoterapi Motivasi Pengembangan Diri<br class="d-none d-md-block">
            Ekskul Pusat Informasi Konseling Remaja (PIK-R)<br class="d-none d-md-block">
            Remaja Siaga Kesehatan (RESIK)<br class="d-none d-md-block">
            SMAN 7 Kota Tasikmalaya<br class="d-none d-md-block">
            28 September 2016 </p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto25.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Seminar Hipnoterapi</h3>
          <p> Seminar Hipnoterapi Motivasi Pengembangan Diri<br class="d-none d-md-block">
              Aktivis OSIS & Ekskul SMP Se-kota Tasikmalaya<br class="d-none d-md-block">
              SMAN 7 Kota Tasikmalaya<br class="d-none d-md-block">
              3 Oktober 2016</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto26.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Training Public Speaking</h3>
          <p> Training Public Speaking<br class="d-none d-md-block">
              Mahasiswa & Umum Se-tasikmalaya<br class="d-none d-md-block">
              BEM STAINU<br class="d-none d-md-block">
              Sekolah Tinggi Agama Islam NU Tasikmalaya<br class="d-none d-md-block">
              11 Juni 2017</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto27.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
            <h3>Training Hipnoterapi</h3>
            <p> Training Hipnoterapi Motivasi Pengembangan Diri<br class="d-none d-md-block">
              Ekskul Pusat Informasi Konseling Remaja (PIK-R)<br class="d-none d-md-block">
              Remaja Siaga Kesehatan (RESIK)<br class="d-none d-md-block">
              SMAN 7 Kota Tasikmalaya<br class="d-none d-md-block">
              28 Oktober 2018 </p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto28.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Training Hypnosis</h3>
          <p> Training Hypnosis<br class="d-none d-md-block">
              Peserta Mahasiswa<br class="d-none d-md-block">
              Adrian Septiadi (A.S) Management<br class="d-none d-md-block">
              UIN Sunan Gunung Djati Bandung<br class="d-none d-md-block">
              24 November 2018</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto29.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Seminar Penguatan Pendidikan Karakter</h3>
          <p> Seminar Penguatan Pendidikan Karakter<br class="d-none d-md-block">
              "Menumbuhkan Motivasi & Kreativitas Peserta Didik"<br class="d-none d-md-block">
              Ekskul Pusat Informasi Konseling Remaja (PIK-R) Remaja Siaga<br class="d-none d-md-block">
              Kesehatan (RESIK)</p>
              SMAN 7 Kota Tasikmalaya</p>
              8 Desember 2018</p>
        </div>
      </div>
      
  </div>
<br><br>
  <div class="container">
    <hr><hr>
      <div class="headline mt-3 text-center" style=" font-weight: 600; font-weight: bolder; font-size: 40px;">
        ASR 2019
      </div>
<hr>
<hr>
  </div>
  
  <div class="project-container">
    <div class="project-card">
        <img src="{{ asset('/img/foto16.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Seminar Nasional/h3>
          <p> Seminar Nasional<br class="d-none d-md-block">
              Self Motivation Therapy & Soft Skill For Student <br class="d-none d-md-block">
              Adrian Septiadi (AS) Management & Komunitas Mahasiswa<br class="d-none d-md-block">
             Hipnoterapi-NLP Indonesia<br class="d-none d-md-block">
              9 Februari 2019</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto17.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Training Self Hypnosis</h3>
          <p> Training Self Hypnosis<br class="d-none d-md-block">
              Peserta Umum<br class="d-none d-md-block">
              Adiran Septiadi (AS) Resources<br class="d-none d-md-block">
              Hotel Promenade Cihampelas Bandung<br class="d-none d-md-block">
              26 Mei 2019 </p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto18.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Masa Orientasi Peserta Didik (MOPD)</h3>
          <p> Masa Orientasi Peserta Didik (MOPD) &<br class="d-none d-md-block">
            Perkenalan Antar Organisasi (PAO)<br class="d-none d-md-block">
            Motivasi & Stage Hypnosis (Entertainment)<br class="d-none d-md-block">
            SMAN 7 Kota Tasikmalaya<br class="d-none d-md-block">
            18 Juli 2019 </p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto19.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Training Hipnoterapi & Motivasi Pengembangan Diri</h3>
          <p> Training Hipnoterapi & Motivasi Pengembangan Diri<br class="d-none d-md-block">
              Ikatan Remaja Masjid (IREMA)<br class="d-none d-md-block">
              MAN I Kota Tasikmalaya<br class="d-none d-md-block">
              28 September 2019</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto20.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
          <h3>Orientasi Pengenalan Mahasiswa Psikologi (OPSI)</h3>
          <p> Orientasi Pengenalan Mahasiswa Psikologi (OPSI)<br class="d-none d-md-block">
              Training Hipnoterapi & Motivasi Pengembangan Diri<br class="d-none d-md-block">
              DEMA-F Psikologi<br class="d-none d-md-block">
              UIN Sunan Gunung Djati Bandung<br class="d-none d-md-block">
              29 September 2019</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto21.jpg') }}" class="card-img-top" alt="Project 1">
        <div class="project-info">
            <h3>Training Hypnosis & Neo NLP Society</h3>
            <p> Training Hypnosis & Neo NLP Society<br class="d-none d-md-block">
              Adrian Septiadi (AS) Resources & Komunitas<br class="d-none d-md-block">
              Lingkar Studi Aktualisasi Diri<br class="d-none d-md-block">
              UIN Bandung & Lapangan Gabisu Bandung<br class="d-none d-md-block">
             16-17 & 23 November<br class="d-none d-md-block">
              & 7 Desember 2019 </p>
        </div>
      </div>
      
      
  </div>
  <br><br>
  <div class="container">
    <hr><hr>
      <div class="headline mt-3 text-center" style=" font-weight: 600; font-weight: bolder; font-size: 40px;">
        ASR 2019 - 2022
      </div>
<hr>
<hr>
  </div>
  <div class="project-container">
    <div class="project-card">
      <img src="{{ asset('/img/Foto4.png') }}" class="card-img-top" alt="Project 1">
      <div class="project-info">
        <h3>Training Hipnoterapi</h3>
        <p> Training Hipnoterapi<br class="d-none d-md-block">
            Dinas Kesehatan Kota Serang Banten<br class="d-none d-md-block">
            Kampioen Bed & Breakfast Hotel Bandung<br class="d-none d-md-block">
            10 Oktober 2019</p>
      </div>
    </div>
    <div class="project-card">
      <img src="{{ asset('/img/Foto5.png') }}" class="card-img-top" alt="Project 2">
      <div class="project-info">
        <h3>Seminar Nasional</h3>
        <p>Seminar Nasional Terdashyat Aktualisasi Diri<br class="d-none d-md-block">
            Adrian Septiadi (AS) Resources & Komunitas<br class="d-none d-md-block">
            Lingkar Studi Aktualisasi Diri UIN Sunan Gunung DJati Bandung<br class="d-none d-md-block">
            19 Oktober 2019</p>
      </div>
    </div>
    <div class="project-card">
        <img src="{{ asset('/img/foto15.jpg') }}" class="card-img-top" alt="Project 2">
        <div class="project-info">
          <h3>Training Hypno Learning</h3>
          <p>Training Hypno Learning<br class="d-none d-md-block">
              Holistic Development Community<br class="d-none d-md-block">
              UIN Sunan Gunung DJati Bandung<br class="d-none d-md-block">
              21 Desember 2019</p>
        </div>
      </div>
      <div class="project-card">
        <img src="{{ asset('/img/foto14.jpg') }}" class="card-img-top" alt="Project 2">
        <div class="project-info">
          <h3>Webinar & Online Training</h3>
          <p>Webinar & Online Training (Sebagian Offline)<br class="d-none d-md-block">
              "Tema Soft Skill Pengembangan Diri & Mental Health"<br class="d-none d-md-block">
              Berjumlah kurang lebih 50 kegiatan , di ikuti oleh ribuan<br class="d-none d-md-block">
              peserta dari berbagai background dan dari berbagai<br class="d-none d-md-block">
              wilayah indonesia Timor Leste, Malaysia & Singapura<br class="d-none d-md-block">
              PT Actual Self Resources(ASR)&Collaboration<br class="d-none d-md-block">
              Masa Pandemik 2020-Sekarang</p>
        </div>
      </div>
    <div class="project-card">
      <img src="{{ asset('/img/Foto8.png') }}" class="card-img-top" alt="Project 3">
      <div class="project-info">
        <h3> Training of trainer</h3>
        <p>   Training of trainer Konselor Sebaya<br class="d-none d-md-block">
            Ekskul Pusat Informasi Konseling Remaja (PIK-R)<br class="d-none d-md-block">
            Remaja Siaga Kesehatan (RESIK)<br class="d-none d-md-block">
            SMAN 7 Kota Tasikmalaya<br class="d-none d-md-block">
            16 Desember 2021</p>
      </div>
    </div>
    <div class="project-card">
      <img  src="{{ asset('/img/Foto6.png') }}" class="card-img-top" alt="Project 4">
      <div class="project-info">
        <h3>Training NLP</h3>
        <p>Training NLP<br class="d-none d-md-block">
            Instructor Management Business of Training<br class="d-none d-md-block">
            LKP Indonesian Life Skill Academy (ILSA)<br class="d-none d-md-block">
            Fave Hotel Bandung<br class="d-none d-md-block">
            1-2 Mei 2021</p>
      </div>
    </div>

    <div class="project-card">
        <img  src="{{ asset('/img/Foto9.png') }}" class="card-img-top" alt="Project 4">
        <div class="project-info">
          <h3>Training Motivasi & Manajemen</h3>
          <p>Training Motivasi & Manajemen Kegiatan pelatihan<br class="d-none d-md-block">
            UKM Seni Alam Bawah Sadar<br class="d-none d-md-block">
            Universitas BTH Kota Tasikmalaya<br class="d-none d-md-block">
            18 Desember 2021
        </div>
      </div>
      <div class="project-card">
        <img  src="{{ asset('/img/Foto10.png') }}" class="card-img-top" alt="Project 4">
        <div class="project-info">
          <h3>Kegiatan Latihan Keterampilan Manajemen Mahasiswa (LKMM)</h3>
          <p>Kegiatan Latihan Keterampilan Manajemen Mahasiswa (LKMM)<br class="d-none d-md-block">
            "Pengembangan Potensi Mahasiswa"<br class="d-none d-md-block">
            Mahasiswa Baru Reguler Pagi Malam & Karyawan  <br class="d-none d-md-block">
            BEM STTB <br class="d-none d-md-block">
            Sekolah Tinggi Teknologi (STT) Bandung<br class="d-none d-md-block">
            24 September 2021</p>
        </div>
      </div>
      <div class="project-card">
        <img  src="{{ asset('/img/Foto11.png') }}" class="card-img-top" alt="Project 4">
        <div class="project-info">
          <h3>Training Soft Skill</h3>
          <p>Training Soft Skill<br class="d-none d-md-block">
              How to Build A Healthy Social Circle<br class="d-none d-md-block">
              BEM KM Falkutas Ekonomi<br class="d-none d-md-block">
              Universitas Negeri Yogyakarta (UNY)<br class="d-none d-md-block">
              20 Maret 2022</p>
        </div>
      </div>
      <div class="project-card">
        <img  src="{{ asset('/img/Foto12.png') }}" class="card-img-top" alt="Project 4">
        <div class="project-info">
          <h3>Training Public Speaking</h3>
          <p>  Training Public Speaking<br class="d-none d-md-block">
            HIMA Ekonomi Syariah<br class="d-none d-md-block">
            Sekolah Tinggi Agama Islam (STAI) Tasikmalaya<br class="d-none d-md-block">
            5 Januari 2022 </p>
          
        </div>
      </div>
      <div class="project-card">
        <img  src="{{ asset('/img/Foto13.png') }}" class="card-img-top" alt="Project 4">
        <div class="project-info">
          <h3>Webinar Pendidikan Dedication in Occupation</h3>
          <p>Webinar Pendidikan Dedication in Occupation<br class="d-none d-md-block">
              "The Role Of Education in This  Era"<br class="d-none d-md-block">
              UPK HIMPS Falkutas Ilmu Sosial & Politik<br class="d-none d-md-block">
              Universitas Diponegoro (UNDIP)<br class="d-none d-md-block">
              11 Juni 2022</p>
        </div>
      </div>
      
      
      
  </div>
</body>
</html>

@endsection