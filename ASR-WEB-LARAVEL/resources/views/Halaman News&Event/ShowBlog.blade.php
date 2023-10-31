@extends('layout.layout')

@section('content')
@section('title', $blog->title)

<!-- Deskripsi Meta -->
@section('meta_description', $blog->content)

<!-- Meta Tags Lainnya -->
@section('meta_tags')
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->content }}">
    <!-- Meta Tags untuk Tag -->
    @php
    $tags = [$blog->tag1, $blog->tag2, $blog->tag3];
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
      
      #social-links ul li{
        display: inline-block;
      }

      #social-links ul li a {
        padding: 20px;
        margin: 2px;
        font-size: 30px;
        color: rgb(46, 41, 114);
        background-color: #ccc;
      }

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
        <h2> Show Blog</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <style>

        @media screen and (min-width: 1200px){
          #style{
            width:100% ;
            height: 50rem;
            
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
        
                  <article class="entry entry-single" >
                    
                    <div class="entry-img"  >
                      <img src="{{ asset('image/' .$blog ->gambar) }}" alt="" id="style" class="img-fluid" >
                      <br><br><br>
                    </div>
        
                    <h2 class="entry-title">
                      <a href="blog-single.html" id="title">{{ $blog->title }}</a>
                    </h2>
        
                    <div class="entry-meta" >
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person" id="meta"></i> <a href="blog-single.html" id="meta">{{ $blog->nama }}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock" id="meta"></i> <a href="blog-single.html" id="meta">{{ $blog->created_at->format('d F Y')  }}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots" id="meta"></i> <a href="blog-single.html" id="meta">12 Comments</a></li>
                      </ul>
                    </div>
        
                    <div class="entry-content">
                      <p id="title1" style="line-height: 1.5; margin-bottom: 10px; text-align: justify;">{!! nl2br(e($blog->content)) !!}</p>
        
        
                    </div>
        
                    <div class="entry-footer">
                      <i class="bi bi-folder"></i>
                      <ul class="cats">
                        <li><a href="#">{{ $blog->_kategori_id }}</a></li>
                      </ul>
        
                      <i class="bi bi-tags"></i>
                      <ul class="tags">
                        
                        <li><a href="#">{{ $blog->tag1 }}</a></li>
                        <li><a href="#">{{ $blog->tag2 }}</a></li>
                        <li><a href="#">{{ $blog->tag3 }}</a></li>
                      </ul>
                    </div>
        
                  </article><!-- End blog entry -->
        
                  <div class="blog-author d-flex align-items-center">
                    <img src="{{ asset('image/' .$blog->User->foto) }}" class="rounded-circle float-left" alt="">
                    <div>
                      <h4>{{ $blog->nama }}</h4>
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
                  
                  
                  <div class="card " style="width: 104rem">
                    <br><br>
                     <h3 style="margin-left:30px; font-weight:bold;"> Share and Engage: Connect with Others through this Article</h3> <br><br>
                    <div id="social-links"  style="margin-left: 2px">
                      <ul>
                        <li>
                          <!-- Tombol berbagi Twitter -->
                          <a href="{{ route('blog.share', ['id' => $blog->id, 'platform' => 'twitter']) }}"><i class="fa-brands fa-twitter"></i></a> 
  
                        </li>
                        <li>
                          <!-- Tombol berbagi Facebook -->
                          <a href="{{ route('blog.share', ['id' => $blog->id, 'platform' => 'facebook']) }}"><i class="fa-brands fa-facebook"></i></i></a>
                        </li>
                        <li>
                          <!-- Tombol berbagi Telegram -->
                          <a href="https://telegram.me/share/url?url={{ urlencode(url('/News&Event/Shownews/' . $blog->id)) }}&text={{ urlencode($blog->title) }}"><i class="fa-brands fa-telegram"></i></a>
  
                        </li>
                        <li>
                          <!-- Tombol berbagi WhatsApp -->
                          <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' - ' . url('/News&Event/Shownews/' . $blog->id)) }}"><i class="fa-brands fa-whatsapp"></i></a>

                        </li>

                        <li>
                          <!-- Tombol berbagi LinkedIn -->
                          <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url('/News&Event/Shownews/' . $blog->id)) }}&title={{ urlencode($blog->title) }}&summary={{ urlencode($blog->Content) }}&source=YourWebsite"><i class="fa-brands fa-linkedin"></i></i></a>

                        </li>
                      </ul>
     
                      
  
                    </div>
                    <br><br>
                  </div>

                  <br><br>
                  <div class="blog-comments">
                    
                 <h4  style="margin-left: 2rem"  class="comments-count">{{ $commentCount  }} Comment </h4>
                    
                    @forelse ($blog->Comment as $item)
                    <div id="comment-1" class="comment" style="margin-left: 2rem" >
                      <div class="d-flex">
                        <div class="comment-img"><img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt=""></div>
                        <div>
                          <h5><a href="">{{ $item->nama }}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a> 
                          </h5>
                          <form action="/comment/{{$item->id}}" method="POST">
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
                    <br>
                    <h5 style="margin-left: 30px">Be the first to comment!</h5>
                        
                    @endforelse
                    
        
        
                      <div class="reply-form">
                        <h4>Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <form action="/comment/{{ $blog->id }}" method="POST">
                          @csrf
                          <div class="row">
                            <div class="col-md-6 form-group">
                              <input type="text"  name="_blog_id" hidden value="{{ $blog->id }}">
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
  {{-- <script>
    setInterval(function() {
      var blogId = {{ $blog->id }};
      $.ajax({
        url: '/comments/count/' + blogId,
        success: function(data) {
          $('#comment-count').html(data);
        }
      });
    }, 10000);
  </script> --}}
  
</body>

</html>

@endsection