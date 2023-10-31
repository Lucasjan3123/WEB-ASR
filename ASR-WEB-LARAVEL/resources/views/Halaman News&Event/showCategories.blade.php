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
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      
      @media screen and (min-width: 1200px) {
        #style{

          width: 900px;
        }
      }
    
      .box{
        /* margin: 100px auto; */
        width: 300px;
        height: 50px;
      }
      .container-1{
        width: 300px;
        vertical-align: middle;
        white-space: nowrap;
        position: relative;
      }
      .container-1 input#search{
        width: 300px;
        height: 50px;
        outline:none;
          background: #ffffff;  
        border: none;
        font-size: 10pt;
        float: left;
        color: #63717f;
        padding-left: 45px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
      }
      .container-1 input#search::-webkit-input-placeholder {
        color: #65737e;
      }

      .navbar-1-2.navbar-light .navbar-nav .nav-link {
        color: #092a33;
        transition: 0.3s;
      }

      .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
        font-weight: 500;
      }

      .navbar-1-2 .btn-get-started {
        border-radius: 20px;
        /* padding: 12px 30px; */
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
    </style>
    <nav class="navbar-1-2 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body-tertiary"
      style="font-family: Poppins, sans-serif">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
         
          {{-- <form class="d-flex" role="search" style="margin-left: 100px;margin-top:5px;">
                 <div class="box">
                    <div class="container-1">
                      <span class="icon"><i class="fa fa-search"></i></span>
                      <input type="search" id="search" placeholder="Search..." />
                    </div>
                 </div>
              <button href="" class="btn" > Search</button>
          </form> --}}
          <div class="d-flex">
            {{-- <a class="btn btn-get-started btn-get-started-yellow" style="margin-left: 50px; " href='/home'>login</a> --}}
          </div>
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
                  <span><i class="bi bi-calendar3"> {{ $item->date }} &nbsp;&nbsp;</i></span>
                  {{-- <span><i class="fi-comments"> 6 comments</i></span> --}}
                  </p>
                  <p  >{{ Str::limit($item->content, 100)}}</p><br>
                  <a href="/News&Event/ShowBlog/{{ $item->id }}" class="btn btn-primary" style="justify-content:center; margin-left:250px;" >Learn more</a>
      
              </div>
              
              </div>
          
          
              
              <hr>
      
              <br>
              
      
      
          </article>      
    
            @empty
                <h3> No other blog </h3>
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

          </div><!-- End blog entries list -->

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