@extends('layout.layout')

@section('content')


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
          <li><a href="index.html" style="color: white" >Home</a></li>
          <li style="color: white">Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        
        <div class="row">

          <div class="col-lg-8 entries" style="font-family:calibri; font-size: 25px;">
            
            <hr> 
            @forelse ($blog as $item)
            <article>
              <div class="row">
              <div class="large-6 columns col-6">
                  <p ><img src="{{ asset('image/' .$item ->gambar) }} "alt="image for article" alt="article preview image"></p>
              </div>
              <div class="large-6 columns col-6">
                  <h3><a href="#" style="color: black">'{{ $item->title }}</a></h3>
                  <p>
                  <span><i class="bi bi-person-fill"> By {{ $item->nama }} &nbsp;&nbsp;</i></span>
                  <span><i class="bi bi-calendar3"> {{ $item->created_at->format('d F Y') }} &nbsp;&nbsp;</i></span>
                  {{-- <span><i class="fi-comments"> 6 comments</i></span> --}}
                  </p>
                  <p  >{{ Str::limit($item->content, 100)}}</p><br>
                  <a href="/News&Event/ShowBlog/{{ $item->slug}}" class="btn btn-primary" style="justify-content:center; margin-left:250px;" >Learn more</a>
      
              </div>
              
              </div>
          
          
              
              <hr>
      
              <br>
              
      
      
          </article>      
    
            @empty
                
            @endforelse

            
            
            
            

            <div class="blog-pagination">
              <ul class="justify-content-center">
            
                <!-- tombol "previous" -->
                @if ($blogs->onFirstPage())
                  <li class="disabled"><a href="#"><span>&laquo;</span></a></li>
                @else
                  <li><a href="{{ $blogs->previousPageUrl() }}" rel="prev"><span>&laquo;</span></a></li>
                @endif
            
                <!-- tautan navigasi halaman -->
                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                  @if ($page == $blogs->currentPage())
                    <li class="active"><a href="#">{{ $page }}</a></li>
                  @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                  @endif
                @endforeach
            
                <!-- tombol "next" -->
                @if ($blogs->hasMorePages())
                  <li><a href="{{ $blogs->nextPageUrl() }}" rel="next"><span>&raquo;</span></a></li>
                @else
                  <li class="disabled"><a href="#"><span>&raquo;</span></a></li>
                @endif
            
              </ul>
            </div>
            
          </div> <!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text" name="keyword">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                @forelse ($kategori as $item)
                    
                <ul>
                  <li><a href="{{ route('blog.filter', $item->id) }}">{{ $item->nama }} </a></li>
                
                </ul>
                @empty
                <h3>no other category</h3>
                    
                @endforelse
              </div><!-- End sidebar categories-->

              <div class="container">
                <h3 class="sidebar-title">Archive Blog</h3>
        
                @foreach($archives as $month => $blogArchives)
                
                <h5 class="sidebar-title">{{ $month }}</h5>
                @foreach($blogArchives as $blog)
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="{{ asset('image/' .$blog ->gambar) }}" alt="">
                    <h4><a href="/News&Event/ShowBlog/{{ $blog->id }}">{{ $blog->title }}</a></h4>
                    <time >{{ $blog->created_at->format('d F Y') }}</time>
                  </div> <br>
                  @endforeach
                
            @endforeach

            </div>
        

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  @forelse ($tag as $item)
                  
                  <li><a href="#">{{ $item->name }}</a></li>
                  @empty
                      
                  @endforelse
                  {{-- <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li> --}}
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

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