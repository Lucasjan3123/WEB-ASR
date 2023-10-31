@extends('layout.layout')

@section('content')
<!-- Deskripsi Meta -->
@section('meta_description', $news->Content)

<!-- Meta Tags Lainnya -->
@section('meta_tags')
    <meta property="og:title" content="{{ $news->Title }}">
    <meta property="og:description" content="{{ $news->Content }}">
    <!-- Meta Tags untuk Tag -->
    @php
    $tags = [$news->tag1, $news->tag2, $news->tag3];
    $tags = array_filter($tags); // Menghapus elemen kosong dari array
    @endphp
    @foreach($tags as $tag)
     <meta property="article:tag" content="{{ $tag }}">
 @endforeach
    
    <!-- Tambahkan meta tags lainnya sesuai kebutuhan -->
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 

  
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
         
          <form class="d-flex" role="search" style="margin-left: 100px;margin-top:5px;">
                 <div class="box">
                    <div class="container-1">
                      <span class="icon"><i class="fa fa-search"></i></span>
                      <input type="search" id="search" placeholder="Search..." />
                    </div>
                 </div>
              <button href="" class="btn" > Search</button>
          </form>
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
          <li style="color: white"> Show Blog</li>
        </ol>
        <h2> Show News</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <style>

        @media screen and (min-width: 1200px){
          #style{
            width:50% ;
            height: 50rem;
            margin-left: 550px;
            
          }
          #title{
            font-size: 2rem;
          }
          #title1{
            font-size: 1.3rem;
          }
          #meta{
            /* width: 100rem; */
            font-size: 1.2rem;
          }
        }
        </style>
        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog" style="width:100%;">
            <div class="container-fluid" data-aos="fade-up" >
        
              
        
                <div class="entries">
        
                  <article class="entry entry-single"style="max-width: 70rem; margin: 0 auto;" >
                    <br><br>
                    <div class="entry-img"  style="max-width: 70rem; margin: 0 auto;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              @if ($news->gambar1 = null)
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  
                              @endif
                              @if ($news->gambar2 = null)
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              @endif

                              @if ($news->gambar3 = null)
                                  
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                              @endif

                              @if ($news->gambar4 = null)
                                  
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                              @endif

                              @if ($news->gambar5 = null)
                                  
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                              @endif

                              @if ($news->gambar6 = null)
                                  
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                              @endif
                              
                              @if ($news->gambar7 = null)
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                  
                              @endif
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('image/' .$news ->gambar) }}" class="d-block w-100" alt="Slide 1">
                              </div>
                              @if ($news->gambar1 = null)
                              
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar1) }}" class="d-block w-100" alt="Slide 2">
                              </div>
                              @endif

                              @if ($news->gambar2 = null)
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar2) }}" class="d-block w-100" alt="Slide 3">
                              </div>
                                  
                              @endif
                              @if ($news->gambar3 = null)
                                  
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar3) }}" class="d-block w-100" alt="Slide 4">
                              </div>
                              @endif

                              @if ($news->gambar4 = null)
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar4) }}g" class="d-block w-100" alt="Slide 5">
                              </div>
                                  
                              @endif

                              @if ($news->gambar5 = null)
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar5) }}" class="d-block w-100" alt="Slide 6">
                              </div>
                                  
                              @endif

                              @if ($news->gambar6 = null)
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar6) }}" class="d-block w-100" alt="Slide 7">
                              </div>
                                  
                              @endif

                              @if ($news->gambar7 = null)
                              <div class="carousel-item">
                                <img src="{{ asset('image/' .$news ->gambar7) }}" class="d-block w-100" alt="Slide 8">
                              </div>
                                  
                              @endif
                            </div>
                            @if ($news->gambar1 = null)
                                
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            @endif
                          </div>
                          
                      {{-- <img src="{{ asset('image/' .$news ->gambar) }}" alt="" id="style" class="img-fluid" > --}}
                      <br><br><br>
                    </div>
                    
                    <br>
                    <h2 class="entry-title">
                      <a href="blog-single.html" id="title">{{ $news->title }}</a>
                    </h2>
        
                    <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person" id="meta"></i> <a href="blog-single.html" id="meta">{{ $news->Author }}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock" id="meta"></i> <a href="blog-single.html" id="meta">{{ $news->Date }}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots" id="meta"></i> <a href="blog-single.html" id="meta">12 Comments</a></li>
                      </ul>
                    </div>
        
                    <div class="entry-content">
                      <p id="title1" style="line-height: 1.5; margin-bottom: 10px; text-align: justify;">{!! nl2br(e($news->Content)) !!}</p>
        
        
                    </div>
        
                    <div class="entry-footer">
                      <i class="bi bi-folder"></i>
                      
        
                      <i class="bi bi-tags"></i>
                      <ul class="tags">
                        
                        <li><a href="#">{{ $news->tag1 }}</a></li>
                        <li><a href="#">{{ $news->tag2 }}</a></li>
                        <li><a href="#">{{ $news->tag3 }}</a></li>
                      </ul>
                    </div>
        
                  </article><!-- End blog entry -->
        
                  <div class="blog-author d-flex align-items-center" style="max-width: 70rem; margin: 0 auto;">
                    <img src="{{ asset('image/' .$news->User->foto) }}" class="rounded-circle float-left" alt="">
                    <div>
                      <h4>{{ $news->Author }}</h4>
                      <div class="social-links">
                        <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>
                      </div>
                      {{-- <p>
                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                      </p> --}}
                    </div>
                  </div><!-- End blog author bio -->
                  <br><br>
                  <div class="blog-comments"style="max-width: 70rem; margin: 0 auto;">
                    
                    <h4  style="margin-left: 2rem"  class="comments-count">{{ $commentCount  }} Comment </h4>
                       
                       @forelse ($news->CommentNews as $item)
                       <div id="comment-1" class="comment" style="margin-left: 2rem" >
                         <div class="d-flex">
                           <div class="comment-img"><img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt=""></div>
                           <div>
                             <h5><a href="">{{ $item->nama }}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a> 
                             </h5>
                             <form action="/commentNews/{{$item->id}}" method="POST">
                               @csrf
                               @method("delete")
                               <button type="submit"  style="float:right">
                                 <small class="fa fa-trash" style="color:black;"></small></button>
                             </form>
                             <time  style="margin-right: 6rem">{{ $item->date }}</time>
                             <p>
                               {{ $item->comment }}
                             </p>
                           </div>
                         </div>
                       </div><!-- End comment #1 -->
           
                       @empty
                       <h5>Tidak ada komentar</h5>
                           
                       @endforelse
                       
           
           <br><br>
                         <div class="reply-form" style="max-width: 70rem; margin: 0 auto;">
                           <h4>Leave a Reply</h4>
                           <p>Your email address will not be published. Required fields are marked * </p>
                           <form action="/commentNews/{{ $news->id }}" method="POST">
                             @csrf
                             <div class="row">
                               <div class="col-md-6 form-group">
                                 <input type="text"  name="news_id" hidden value="{{ $news->id }}">
                                 <input name="nama" type="text" class="form-control" placeholder="Your Name*">
                               </div>
                               <div class="col-md-6 form-group">
                                 <input name="email" type="text" class="form-control" placeholder="Your Email*">
                               </div>
                             </div>
                             <div class="row">
                               <div class="col form-group">
                                 <input  type="text" class="form-control" readonly name="date" value="{{ \Carbon\Carbon::now()->toDateString() }}">
                               </div>
                             </div>
                             <div class="row">
                               <div class="col form-group">
                                 <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                               </div>
                             </div>
                             <button type="submit" class="btn btn-primary">Post Comment</button>
             
                           </form>
             
                         </div>
                       
           
                     </div><!-- End blog comments -->
           
                
        
                
        
              
        
            </div>
          </section><!-- End Blog Single Section -->

   

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