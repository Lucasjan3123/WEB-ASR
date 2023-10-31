<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
    rel="stylesheet"
    />

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
    
    <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white"  style="color: rgba(0, 0, 0, 0.05);" id="footer">
   <br><br>

   <div class="footer-top">


     <!-- Section: Links  -->
     <section class="">
       <div class="container text-center text-md-start mt-5">
         <!-- Grid row -->
         <div class="row mt-3">
           <!-- Grid column -->
           <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
             <!-- Content -->
             <h6 class="text-uppercase fw-bold mb-4">
                 <img src="{{ asset("/img/download__2_-removebg-preview.png") }}" alt="" width="250px">
  
             </h6>
             <p>
               Your Place to Become Your Authentic & Meaningful Self
             </p>
  
             <br>
             <div>
                 <a href="" class="me-4 text-reset">
                   <i class="fab fa-facebook-f"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                   <i class="fab fa-twitter"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                   <i class="fab fa-google"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                   <i class="fab fa-instagram"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                   <i class="fab fa-linkedin"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                   <i class="fab fa-github"></i>
                 </a>
               </div>
               <br>
  
              
           </div>
           <!-- Grid column -->
           
           <!-- Grid column -->
           <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" >
             <!-- Links -->
             <h5 class="fw-bold mb-4">
               About Us
             </h5>
             <p>
               <a href="{{ route('AboutUs.Vision') }}" class="text-reset">Vision & Mission</a>
             </p>
             <p>
               <a href="{{ route('AboutUs.about') }}" class="text-reset">Profile & History ASR</a>
             </p>
             <p>
               <a href="{{ route('AboutUs.Structure') }}" class="text-reset">Structure Organization</a>
             </p>
             <p>
              <a href="{{ route('AboutUs.Finest') }}" class="text-reset">Our Finest Work</a>
            </p>
             <p>
                 <a href='{{ route('AboutUs.Joinmember') }}'    class="text-reset">Join Member</a>
               </p>
               <p>
                 <a href='{{ route('AboutUs.joinVolunteer') }}'   class="text-reset">Join Volunteer</a>
               </p>
           </div>
           <!-- Grid column -->
   
           <!-- Grid column -->
           {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
             <!-- Links -->
             <h5 class="fw-bold mb-4">
               What We Do
             </h5>
             <p>
               <a href="#!" class="text-reset">ASR Ambassador</a>
             </p>
             <p>
               <a href="#!" class="text-reset">ASR Academy</a>
             </p>
             <p>
               <a href="#!" class="text-reset">ASR Career</a>
             </p>
             <p>
               <a href="#!" class="text-reset">ASR Creativity</a>
             </p>
             <p>
                 <a href="#!" class="text-reset">ASR Consulting</a>
               </p>
               <p>
                 <a href="#!" class="text-reset">ASR Community</a>
               </p>
               <p>
                 <a href="#!" class="text-reset">ASR Bussines & Store</a>
               </p>
           </div>
           <!-- Grid column --> --}}
  
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                 <!-- Links -->
                 <h5 class="fw-bold mb-4">
                   News & Event
                 </h5>
                 
                 <p>
                   <a href='/News&Event/News&Event'     class="text-reset">News & Event</a>
                 </p>
                 <p>
                   <a href='/News&Event/blog'    class="text-reset">Articles</a>
                 </p>
             
               </div>
               <!-- Grid column -->
   
           <!-- Grid column -->
           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
             <!-- Links -->
             <h5 class=" fw-bold mb-4">Contact & Support</h5>
  
             <p>
                 <a href='{{ route('Contact.Needhelp') }}' class="text-reset">Need Help ?</a>
               </p>
  
             <p>
                 <a href="{{ route('Contact.ContactUs') }}" class="text-reset">Contact Us</a>
               </p>
  
               <p>
                 <a href="{{ route('Contact.feedback') }}" class="text-reset">Send Us Your Feedback</a>
               </p>
  
               <br><br>
               <div class="col-lg-12 col-md-6 footer-newsletter" >
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="{{ route("email.Subscribe") }}" method="post" style="height:50px">
                  <input type="email" name="email" ><br><br>
                  <input type="submit" value="Subscribe" >
                </form>
              </div>
               
  
           </div>
           <!-- Grid column -->
         </div>
         <!-- Grid row -->
         <br><br>

         <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          
         </div>
       </div>
     </section>
     <!-- Section: Links  -->
   
     <!-- Copyright -->
     <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
       © 2023 ASR Inc. All Rights Reserve
     </div>
  
   
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

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
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
</body>
</html>