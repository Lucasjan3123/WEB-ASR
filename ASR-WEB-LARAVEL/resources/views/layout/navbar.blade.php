<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>

          

            <style>
  
              
              @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
              
             /* .aktif {
              
              background-color: gray;
              } */

        

              @media (min-width :1000px){

                nav span
                {
                  /* background-color: #eb4d4b; */
                  position: fixed;
                  top: -50px;
                  width: 100%;
                  display: block;
                  transition: top 0.3s;
                  display: none;
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
                  padding: 12px 30px;
                  font-weight: 500;
                  cursor: pointer;
                  outline: none;
                }
          
                
          
                .navbar-1-2 .btn-get-started:hover {
                 scale: 1.05;
                 color: white;
                  transition: 0.3s;
                }
    
                .navbar-1-2 .btn-get-started:active {
                 scale: 0.95;
               
                }
                
                .toggle-btn {
                  display: none;
                }

                .bars {
                  display: none;
                }

                .navbar {
                  display: flex;
                  flex-direction: column;
                }

                .nav-item {
                  width: 100%;
                  margin-bottom: 10px;
                }

                .dropdown-menus {
                  display: none;
                  margin-left: 10px;
                }

                .dropdown-item {
                  margin-bottom: 5px;
                }


              }

  
              @media(max-width:992px){

                     ul li .btn-get-started{
                  display: none;
                }
  
                nav .toggle-btn{
                  display:block;
                  font-size: 1.5rem;
                  cursor: pointer;
                }
                
                
              
                .navbar-1-2.navbar-light .navbar-nav .nav-link {
                  /* color: #092a33; */
                  transition: 0.3s;
                }
          
                .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
                  font-weight: 500;
                }
          
                .navbar-1-2 .btn-get-started {
                  border-radius: 20px;
                  padding: 12px 30px;
                  font-weight: 500;
                  cursor: pointer;
                  outline: none;
                }
          
                
          
                .navbar-1-2 .btn-get-started:hover {
                 scale: 1.05;
                 /* color: white; */
                  transition: 0.3s;
                }
    
                .navbar-1-2 .btn-get-started:active {
                 scale: 0.95;
               
                }
                              /* Fixed sidenav, full height */
              .sidenav {
                height: 100%;
                width: 400px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: lightslategray;
                overflow-x: hidden;
                padding-top: 20px;
              }

              /* Style the sidenav links and the dropdown button */
              .sidenav a, #dropdown-btn {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: white;
                display: block;
                border: none;
                /* background: none; */
                width:100%;
                text-align: left;
                cursor: pointer;
                outline: none;
              }

              .sidenav a, .dropdown-btn {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: white;
                display: block;
                border: none;
                /* background: none; */
                width:100%;
                text-align: left;
                cursor: pointer;
                outline: none;
              }

              /* On mouse-over */
              /* .sidenav a:hover, .dropdown-btn:hover {
                color: #f1f1f1;
              } */

              /* Main content */
              .main {
                margin-left: 200px; /* Same as the width of the sidenav */
                font-size: 20px; /* Increased text to enable scrolling */
                padding: 0px 10px;
              }

              /* Add an active class to the active dropdown button */
              .active {
                background-color: white;
                color: white;
              }

              /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
              .dropdown-container {
                display: none;
                background-color: white;
                padding-left: 8px;
              }

              /* Optional: Style the caret down icon */
              .fa-caret-down {
                float: right;
                padding-right: 8px;
              }

              #close{
                margin-left: 20rem;
               
              }
              .aktif {
            background-color: #27c499
            }
            }
            


              @media (max-width:540px){

                ul li .btn-get-started{
                  display: none;
                }
  
                nav .toggle-btn{
                  display:block;
                  font-size: 1.5rem;
                  cursor: pointer;
                  
                }

                .sidenav {
                height: 100%;
                width: 350px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: lightslategray;
                overflow-x: hidden;
                padding-top: 20px;
              }

                

                
              
                .navbar-1-2.navbar-light .navbar-nav .nav-link {
                  /* color: #092a33; */
                  transition: 0.3s;
                }
          
                .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
                  font-weight: 500;
                }
          
                .navbar-1-2  {
                  border-radius: 20px;
                  padding: 12px 30px;
                  font-weight: 500;
                  cursor: pointer;
                  outline: none;
                }
          
                .navbar-1-2 .btn-get-started:active {
                 scale: 0.95;
               
                }
                
               .navbar-1-2{
                justify-content: space-between;
               }
               #close{
                margin-left: 17rem;
               
              }  
              }

              @media (max-width:380px){

              ul li .btn-get-started{
                display: none;
              }

              nav .toggle-btn{
                display:block;
                font-size: 1.5rem;
                cursor: pointer;
                
              }

              #close{
                margin-left: 11rem;
               
              }
              

              .sidenav {
                height: 100%;
                width: 250px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: lightslategray;
                overflow-x: hidden;
                padding-top: 20px;
              }


              .navbar-1-2.navbar-light .navbar-nav .nav-link {
                /* color: #092a33; */
                transition: 0.3s;
              }

              .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
                font-weight: 500;
              }

              .navbar-1-2  {
                border-radius: 20px;
                padding: 12px 50px;
                font-weight: 500;
                cursor: pointer;
                outline: none;
              }
/* 
              .navbar-1-2 .btn-get-started:active {
              scale: 0.95;

              } */
              img{
                width: 80%;
              }
              .toggle-btn{
              float: left;  
              }

              .navbar-1-2{
                justify-content: space-between;
               }
               
               .navbar-brand{
                width: 70%;
               }

              }

              @media (max-width:280px){

              ul li .btn-get-started{
                display: none;
              }

              nav .toggle-btn{
                display:block;
                font-size: 1.5rem;
                cursor: pointer;
                
              }
             
              /* .close-btn{
                margin-right: 10rem;
                background-color: white;
                border-radius: 10%;
              } */


             .navbar-1-2.navbar-light .navbar-nav .nav-link {
                /* color: #092a33; */
                transition: 0.3s;
              }

              .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
                font-weight: 500;
              }

              .navbar-1-2  {
                border-radius: 20px;
                padding: 12px 50px;
                font-weight: 500;
                cursor: pointer;
                outline: none;
              }
              /* 
              .navbar-1-2 .btn-get-started:active {
              scale: 0.95;

              } */
              img{
                width: 80%;
              }
              .toggle-btn{
              float: left;  
              }

              .navbar-1-2{
                justify-content: space-between;
              }
              
              .navbar-brand{
                width: 65%;
              }

              }
  
            </style>
            
            <nav class="navbar-1-2 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body "
              style="font-family: Poppins, sans-serif;">
              
              <div class="container  " style="height: 150px;margin-bottom:0px;">
                <a class="navbar-brand" href="#" style="margin-top:30px;" >
                  <img src="{{ asset("/img/download__2_-removebg-preview.png") }}" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-top:30px">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                      <a class="nav-link Btn  " aria-current="page" href="/"  >Home</a>
                    </li>
                    &ensp;  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle Btn" href="/AboutUs" role="button" data-bs-toggle="dropdown" aria-expanded="false"  onclick="ubahWarna()" id="aktif">
                          About Us
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item Btn" href="{{ route('AboutUs.Vision') }}">Vision & Mission</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item Btn" href="{{ route('AboutUs.about') }}">Profile & History ASR</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item Btn" href="{{ route("AboutUs.Structure") }}">Structure Organization</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item Btn" href="{{ route("AboutUs.Finest") }}">Our FInest Work</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item Btn" href="{{ route("AboutUs.Joinmember") }}">Join Member</a></li>
                          <li><hr class="dropdown-divider"></li> 
                          <li><a class="dropdown-item Btn" href='{{ route("AboutUs.joinVolunteer") }}'>Join Volunteer</a></li>
                        </ul>
                    </li>
                    {{-- &ensp; <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle Btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  onclick="ubahWarna()" id="aktif">
                          What We Do
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">ASR Ambassador</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">ASR Academy</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">ASR Career</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">ASR Creativity</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">ASR Consulting</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">ASR Community</a></li>
                          <li><hr class="dropdown-divider"></li> 
                          <li><a class="dropdown-item" href="#">ASR Bussiners & Store</a></li>
                        </ul>
                    </li> --}}
                    &ensp;   <li class="nav-item">
                      <a class="nav-link Btn  " aria-current="page" href="/News&Event/News&Event" >News & Event</a>
                    </li>
                    &ensp; <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle Btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  onclick="ubahWarna()" id="aktif">
                          Contact & Support
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('Contact.Needhelp') }}">Need Help ?</a></li>
                          <li><a class="dropdown-item" href="{{ route('Contact.ContactUs') }}">Contact Us</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{ route('Contact.feedback') }}">Send Us Your Feedback</a></li>
                        </ul>
                    </li>
                  </ul>
  
                
                
                  
                </div>
                <div class="toggle-btn">
                  <a href="javascript:void(0);"  onclick="openNav()" id="menu">
                    <i uk-icon="menu" aria-hidden="true"></i>

                  </a>
                </div>

                
               </div>
            
               <div class="bars " id="open" >

                 
                 
                 <br><br>
                 <div class="sidenav">
                  <div class="close-btn" id="close">
                    <a href="javascript:void(0);" onclick="closeNav()">
                      <i uk-icon="close" aria-hidden="true" style="color: white"></i>
                    </a>
                  </div>
                  <br><br><b></b>
                  <img src="{{ asset("/img/download__2_-removebg-preview.png") }}" alt="" style="margin-left:40px">
                  <br><br>
                  <a  href="/" id="dropdown-btn" style="color: white; font-size: 20px; text-align: left;">
                    <i class="bi bi-house-door" style="font-size: 30px;"></i> &ensp;&ensp; Home
                  </a>
                  
                  <button class="{{ request()->is('AboutUs*') ? 'aktif' : '' }} dropdown-btn">
                    <i class="bi bi-people" style="font-size: 30px;"></i>&ensp;&ensp; About Us
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a class="{{ request()->is('AboutUs/Vision*') ? 'aktif' : '' }}" href="{{ route('AboutUs.Vision') }}">Vision & Mission</a>
                    <a class="{{ request()->is('AboutUs/about*') ? 'aktif' : '' }}" href="{{ route('AboutUs.about') }}">Profile & History ASR</a>
                    <a class="{{ request()->is('AboutUs/Structure*') ? 'aktif' : '' }}" href="{{ route('AboutUs.Structure') }}">Structure Organization</a>
                    <a class="{{ request()->is('AboutUs/Finest*') ? 'aktif' : '' }}" href="{{ route('AboutUs.Finest') }}">Our Finest Work</a>
                    <a class="{{ request()->is('AboutUs/JoinMember*') ? 'aktif' : '' }}" href="{{ route('AboutUs.Joinmember') }}">Join Member</a>
                    <a class="{{ request()->is('AboutUs/JoinVolunteer*') ? 'aktif' : '' }}" href="{{ route('AboutUs.joinVolunteer') }}">Join Volunteer</a>
                  </div>
                
                  <a class="{{ request()->is('news*') ? 'aktif' : '' }}" href="{{ route('news') }}" id="dropdown-btn" style="color: white;font-size: 20px;  text-align: left;"><i class="bi bi-megaphone" style="font-size: 30px;"></i>&ensp;&ensp;News & Event</a>
                
                  <button class="{{ request()->is('Contact*') ? 'aktif' : '' }} dropdown-btn" href="{{ route('news') }}">
                    <i class="bi bi-telephone" style="font-size: 25px;"></i>&ensp;&ensp; Contact & Support
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a class="{{ request()->is('Contact/NeedHelp*') ? 'aktif' : '' }}" href="{{ route('Contact.Needhelp') }}">Need Help ?</a>
                    <a class="{{ request()->is('Contact/ContactUs*') ? 'aktif' : '' }}" href="{{ route('Contact.ContactUs') }}">Contact Us</a>
                    <a class="{{ request()->is('Contact/SendUSYourFeedback*') ? 'aktif' : '' }}" href="{{ route('Contact.feedback') }}">Send Us Your Feedback</a>
                  </div>
                </div>
                
            
            </nav>
        

        <script type="text/javascript">
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling;
              if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
              } else {
                dropdownContent.style.display = "block";
              }
            });
          }
       function openNav() {
       document.getElementById("open").style.width = "100%" ;
       document.getElementById("open").style.display = "block"; ;
       document.getElementById("menu").style.display = "none"; 


      }

      function closeNav() {
        document.getElementById("open").style.width = "0%" ;
       document.getElementById("open").style.display = "none" ;
       document.getElementById("menu").style.display = "block"; 

      }

  document.addEventListener("DOMContentLoaded", function() {
    var sidenavItems = document.querySelectorAll(".sidenav a, .sidenav button");

    sidenavItems.forEach(function(item) {
      if (item.href === window.location.href) {
        item.classList.add("aktif");
      }
    });
  });

  // document.addEventListener("DOMContentLoaded", function() {
  //   var navitem = document.querySelectorAll("ul li a");

  //   navitem.forEach(function(item) {
  //     if (item.href === window.location.href) {
  //       item.classList.add("aktif");
  //     }
  //   });
  // });
      
       

        </script>
          
    </body>
</html>