<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asresourcesindonesia</title>
    {{-- <title>Document</title> --}}

     <!-- Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <!-- Font Awesome -->
      <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
      />
      {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
      <!-- Google Fonts -->
      <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"/>
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


      <!-- MDB -->
      <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
      rel="stylesheet"
      />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

      <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />

     <!-- Foundation -->
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

     <!-- Favicons -->
  <link href="assets/img/favicon.png" >
  <link href="assets/img/apple-touch-icon.png" >

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

  <link rel="icon" type="image/png" href="{{ asset('/img/download__2_-removebg-preview.png') }}" style="width: ">
      
    <style>
        
       li a:hover {
       
            background-color:white;
            color: blueviolet;
            border-bottom:3px solid blueviolet;
            border-radius: 1px;
        }
       

        
        
         /* li .aktif{
            color: blueviolet;
            border-bottom:5px solid blueviolet;
            border-radius: 1px;
            transition: 0.5s ease;
            
        } */

        /* @media only screen and (min-height: 1000px){
            nav{
                width: 100%;
            }
        } */

     

        </style>
</head>
<body>
 
    {{-- Navbar --}}

    @include('layout.navbar')

    

    {{-- Content --}}
        
        @yield('content')
    

      

    {{-- Footer --}}
    @include("layout.footer")
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script type="text/javascript">

      $(document).on('click', 'ul li', function () {
          $(this).addClass("aktif").siblings().removeClass('aktif')
      })
      var url = window.location.href;
      $('.navbar-nav  .nav-link dropdown-toggle').each(function(){
          if (url == (this.href)){
              $(this).closest('li').addClass('aktif');

              $(this).closest('li').parent().parent().addClass('aktif');
              $(this).closest('a').addClass('aktif');
          }
      })

      <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

// <!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js"></script>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>

    <!-- Vendor JS Files -->
  <script src="{{ asset("assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("assets/js/main.js") }}"></script>
    
</html>