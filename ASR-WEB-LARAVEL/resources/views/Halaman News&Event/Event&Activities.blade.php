@extends('layout.layout')

@section('content')

<style>

</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Presento Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
<!-- Favicons -->
<link href="{{ asset("assets/img/favicon.png") }}" rel="icon">
<link href="{{ asset("assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

<!-- Foundation -->
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset("assets/vendor/aos/aos.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">


</head>

<body>

  <style>
    .navbar-1-2.navbar-light .navbar-nav .nav-link {
      color: #092a33;
      transition: 0.3s;
    }
  
    .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
      font-weight: 500;
    }
  
    .navbar-1-2 .btn-get-started {
      border-radius: 20px;
      font-weight: 500;
    }
  
    .navbar-1-2 .btn-get-started-yellow {
      background-color: #ffdda9;
      color: #372642;
      transition: 0.3s;
    }
  
    .navbar-1-2 .btn-get-started-yellow:hover {
      background-color: #fcd396;
      color: #372642;
      transition: 0.3s;
    }
  
    /* Media Query for screens with maximum width 900px */
    @media (max-width: 900px) {
      .navbar-1-2 .navbar-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
      }
  
      .navbar-1-2 .navbar-nav .nav-item {
        margin-right: 10px;
      }
  
      .navbar-1-2 .navbar-nav .nav-link {
        padding: 5px 10px;
      }
  
      .navbar-1-2 .navbar-form {
        margin-top: 10px;
      }
    }
  
    /* Style untuk search bar */
    .search-container {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      margin-top: 10px;
    }
  
    .search-input {
      width: 200px;
      height: 43px;
      padding: 5px;
      border: none;
      border-radius: 3px;
      font-size: 14px;
    }
  
    .search-button {
      margin-left: 5px;
      padding: 5px 10px;
      margin-bottom: 20px;
      background-color: #fcd396;
      border: none;
      border-radius: 3px;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
  
  <nav class="navbar-1-2 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body-tertiary"
    style="font-family: Poppins, sans-serif">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link px-md-4 active" aria-current="page" href="/News&Event/News&Event">All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-4" href="/News&Event/Event&Activities">Event & Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-4" href="/News&Event/blog">Blog</a>
        </li>
      </ul>
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
        <button class="search-button">Search</button>
      </div>
    </div>
  </nav>
  
  
  
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style="background-color: lightslategray">
      <div class="container">

        <ol>
          <li><a href="index.html" style="color: white">Home</a></li>
          <li style="color: white">Event & Activities</li>
        </ol>
        <h2>Event & Activities</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
            
       @forelse ($news as $item)
       <div class="card" style="width: 80rem; ">
    
        <div class="row">
        <div class="large-8 columns col-8" >
            <br>
            <h2 style="margin-left: 30px;" ><a href="/News&Event/Shownews/{{ $item->id }}" style="color: black">'{{ $item->Title }}</a></h2> <br>
            <p >
                &ensp;  &ensp;<h4 style="margin-left: 80px"><i class="bi bi-person-fill"> By {{ $item->Author }} &nbsp;&nbsp;</i></h4><br>
                &ensp;  &ensp; <h4 style="margin-left: 80px"><i class="bi bi-calendar3"> {{ $item->Date }} &nbsp;&nbsp;</i></h4>
            {{-- <span><i class="fi-comments"> 6 comments</i></span> --}}
            </p>

        </div>

        <div class="large-4 columns col-4">
            <br>
            <p ><img src="{{ asset('image/' .$item ->gambar) }} "  width="auto" alt="image for article" alt="article preview image" style="margin-left:80px; margin-bottom:10px"></p>
            
        </div>
        
        </div>
    
    

        


    </div>      
       @empty
           
       @endforelse     
     
            
            
            
            
        <br><br>
       <div class="blog-pagination">
        <ul class="justify-content-center">
      
          <!-- tombol "previous" -->
          @if ($news1->onFirstPage())
            <li class="disabled"><a href="#"><span>&laquo;</span></a></li>
          @else
            <li><a href="{{ $news1->previousPageUrl() }}" rel="prev"><span>&laquo;</span></a></li>
          @endif
      
          <!-- tautan navigasi halaman -->
          @foreach ($news1->getUrlRange(1, $news1->lastPage()) as $page => $url)
            @if ($page == $news1->currentPage())
              <li class="active"><a href="#">{{ $page }}</a></li>
            @else
              <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
          @endforeach
      
          <!-- tombol "next" -->
          @if ($news1->hasMorePages())
            <li><a href="{{ $news1->nextPageUrl() }}" rel="next"><span>&raquo;</span></a></li>
          @else
            <li class="disabled"><a href="#"><span>&raquo;</span></a></li>
          @endif
      
        </ul>
      </div>
      
    </div> <!-- End blog entries list -->


         
        

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset("assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("assets/js/main.js") }}"></script>

</body>

</html>

@endsection