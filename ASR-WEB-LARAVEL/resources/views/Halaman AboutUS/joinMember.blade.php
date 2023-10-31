
@extends('layout.layout')

@section('content')
{{-- <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Join Member</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body> --}}
      <section>

        <style scoped>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
          
          #headers{
            
          }
          .header-2-2 .modal-item.modal {
            top: 2rem;
          }
    
          .header-2-2 .navbar,
          .header-2-2 .hero {
            padding: 3rem 2rem;
          }
    
          .header-2-2 .navbar-light .navbar-nav .nav-link {
            font: 300 18px/1.5rem Poppins, sans-serif;
            color: #1d1e3c;
            transition: 0.3s;
          }
    
          .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
            font: 600 18px/1.5rem Poppins, sans-serif;
            color: #1d1e3c;
            transition: 0.3s;
          }
    
          .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
          .header-2-2 .navbar-light .navbar-nav .nav-link.active,
          .header-2-2 .navbar-light .navbar-nav .nav-link.show,
          .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
            font-weight: 600;
            transition: 0.3s;
          }
    
          .header-2-2 .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
          }
    
          .header-2-2 .btn:focus,
          .header-2-2 .btn:active {
            outline: none !important;
          }
    
          .header-2-2 .btn-fill {
            font: 600 18px / normal Poppins, sans-serif;
            background-color: #27c499;
            border-radius: 12px;
            padding: 12px 32px;
            transition: 0.3s;
          }
    
          .header-2-2 .btn-fill:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
              0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
              var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s;
          }
    
          .header-2-2 .btn-no-fill {
            font: 300 18px/1.75rem Poppins, sans-serif;
            color: #1d1e3c;
            padding: 12px 32px;
            transition: 0.3s;
          }
    
          .header-2-2 .modal-item .modal-dialog .modal-content {
            border-radius: 8px;
            transition: 0.3s;
          }
    
          .header-2-2 .responsive li a {
            padding: 1rem;
            transition: 0.3s;
          }
    
          .header-2-2 .text-caption {
            font: 600 0.875rem/1.625 Poppins, sans-serif;
            margin-bottom: 2rem;
            color: #27c499;
          }
    
          .header-2-2 .left-column {
            margin-bottom: 2.75rem;
            width: 100%;
          }
    
          .header-2-2 .right-column {
            width: 100%;
          }
    
          .header-2-2 .title-text-big {
            font: 600 2.25rem/2.5rem Poppins, sans-serif;
            margin-bottom: 2rem;
            color: #272e35;
          }
    
          .header-2-2 .btn-try {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            background-color: #27c499;
            transition: 0.3s;
          }
    
          .header-2-2 .btn-try:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
              0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
              var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s;
          }
    
          .header-2-2 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            border: 1px solid #555b61;
            color: #555b61;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            background-color: transparent;
            transition: 0.3s;
          }
    
          .header-2-2 .btn-outline:hover {
            border: 1px solid #27c499;
            color: #27c499;
            transition: 0.3s;
          }
    
          .header-2-2 .btn-outline:hover div path {
            fill: #27c499;
            transition: 0.3s;
          }
    
          @media (min-width: 576px) {
            .header-2-2 .modal-item .modal-dialog {
              max-width: 95%;
              border-radius: 12px;
            }
    
            .header-2-2 .navbar {
              padding: 3rem 2rem;
            }
    
            .header-2-2 .hero {
              padding: 3rem 2rem 5rem;
            }
    
            .header-2-2 .title-text-big {
              font-size: 3rem;
              line-height: 1.2;
            }
          }
    
          @media (min-width: 768px) {
            .header-2-2 .navbar {
              padding: 3rem 4rem;
            }
    
            .header-2-2 .hero {
              padding: 3rem 4rem 5rem;
            }
    
            .header-2-2 .left-column {
              margin-bottom: 3rem;
            }
          }
    
          @media (min-width: 992px) {
            .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
              padding-right: 1.25rem;
              padding-left: 1.25rem;
            }
    
            .header-2-2 .navbar {
              padding: 3rem 6rem;
            }
    
            .header-2-2 .hero {
              padding: 3rem 6rem 5rem;
            }
    
            .header-2-2 .left-column {
              width: 50%;
              margin-bottom: 0;
            }
    
            .header-2-2 .right-column {
              width: 50%;
            }
    
            .header-2-2 .title-text-big {
              font-size: 3.75rem;
              line-height: 1.2;
            }
            #headers{
              
            }
          }
        </style>
        <div class="container-fluid mx-auto p-0  position-relative header-2-2" id="headers" style="font-family: 'Poppins', sans-serif; justify-content:center;background-image: url(/img/Screenshot.png);background-size: 120rem;background-repeat: no-repeat; ">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#">
              <img style="margin-right: 0.75rem"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
              aria-labelledby="targetModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-white border-0">
                  <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                    <a class="modal-title" id="targetModalLabel">
                      <img style="margin-top: 0.5rem"
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                        alt="" />
                    </a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                  </div>
    
            <div id="navbarTogglerDemo">
            
            </div>
          </nav>
    
          <div>
            <div class="mx-auto d-flex flex-lg-row flex-column hero" id="headers"  >
              <!-- Left Column -->
              <div
                class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                <h1 class="title-text-big" style="color:white">
                  Join as a Member: Become a Part of Our Community  and Access Exclusive Benefits, Resources, and Opportunities."
                </h1>
                <br>
                <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                  <button class="btn d-inline-flex mb-md-0 btn-try text-white" style=";width:160px"  >
                    <a class="text-white" href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform">
                    
                      Join Member 
                    </a>
                  </button>
                </div>
              </div>
              <div class="right-column text-center d-flex justify-content-center pe-0" >
              </div>
            </div>
          </div>
        </div>
      </section>
 
  <section class="h-200 w-100 bg-white" style="box-sizing: border-box">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-2 .btn:focus,
      .content-2-2 .btn:active {
        outline: none !important;
      }

      .content-2-2 .title-text {
        padding-top: 5rem;
        margin-bottom: 3rem;
      }

      .content-2-2 .text-title {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        color: #121212;
        margin-bottom: 0.625rem;
      }

      .content-2-2 .text-caption {
        color: #121212;
        font-weight: 300;
      }

      .content-2-2 .column {
        padding: 2rem 2.25rem;
      }

      .content-2-2 .icon {
        margin-bottom: 1.5rem;
      }

      .content-2-2 .icon-title {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
        color: #121212;
      }

      .content-2-2 .icon-caption {
        font: 400 1rem/1.625 Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-2-2 .card-block {
        padding: 1rem 1rem 5rem;
      }

      .content-2-2 .card {
        padding: 1.75rem;
        background-color: #eef6f4;
        border-radius: 0.75rem;
        border: 1px solid #27c499;
      }

      .content-2-2 .card-title {
        font: 600 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
        color: #000000;
      }

      .content-2-2 .card-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        color: #565656;
        letter-spacing: 0.025em;
        margin-bottom: 0;
      }

      .content-2-2 .btn-card {
        font: 700 1rem/1.5rem Poppins, sans-serif;
        background-color: #27c499;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
      }

      .content-2-2 .btn-card:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .content-2-2 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        color: #979797;
        border: 1px solid #979797;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
      }

      .content-2-2 .btn-outline:hover {
        border: 1px solid #27c499;
        color: #27c499;
      }

      .content-2-2 .card-text {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }

      .content-2-2 .grid-padding {
        padding: 0rem 1rem 3rem;
      }

      @media (min-width: 576px) {
        .content-2-2 .grid-padding {
          padding: 0rem 2rem 3rem;
        }

        .content-2-2 .card-block {
          padding: 3rem 2rem 5rem;
        }
      }

      @media (min-width: 768px) {
        .content-2-2 .grid-padding {
          padding: 0rem 4rem 3rem;
        }

        .content-2-2 .card-block {
          padding: 3rem 4rem 5rem;
        }
      }

      @media (min-width: 992px) {
        .content-2-2 .grid-padding {
          padding: 1rem 6rem 3rem;
        }

        .content-2-2 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-2 .column {
          padding: 0rem 2.25rem;
        }
      }

      @media (min-width: 1200px) {
        .content-2-2 .grid-padding {
          padding: 1rem 10rem 3rem;
        }

        .content-2-2 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-2 .card-btn-space {
          margin-top: 15px;
          margin-bottom: 15px;
        }

        .content-2-2 .btn-card,
        .content-2-2 .btn-outline {
          width: 95%;
          /* float: right; */
        }
      }

      @media (max-width: 980px) {
        .content-2-2 .card-btn-space {
          width: 100%;
        }
      }
    </style>
    <div class="content-2-2 container mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">9 benefits of ASR Members Academy</h1>
         
      </div>

      <div class="grid-padding text-center" >
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="{{ asset("/img/logo-image(1).png") }}"
                alt="" />
            </div>
            <h3 class="icon-title">Active ASR E-Member Card</h3>
            <p class="icon-caption">
              Unlock exclusive benefits and discounts by becoming an ASR Aktif E-member Card holder today! Don't miss out on the perks of membership and join our community now
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="{{ asset("/img/logo-image6.png") }}"
                alt="" />
            </div>
            <h3 class="icon-title">E-certificate membership</h3>
            <p class="icon-caption">
              The e-certificate membership is one of the advantages obtained by becoming a member. This e-certificate serves as an official and digital proof of your membership status. With the e-certificate membership, you can easily access and store it electronically, as well as enjoy exclusive benefits, privileges, and access to various services provided by the membership program.
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
                alt="" />
            </div>
            <h3 class="icon-title">Whatsapp group members</h3>
            <p class="icon-caption">
              Unlock the full potential of ASR Indonesia and ASR Provinces by becoming a member of our active members WhatsApp group. Connect with like-minded individuals, receive exclusive updates and opportunities, and be part of a community dedicated to creating a sustainable future
            </p>
          </div>
        </div>
      </div>

      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="{{ asset("/img/logo-image2.png") }}"
                alt="" />
            </div>
            <h3 class="icon-title">Free access to educational materials </h3>
            <p class="icon-caption">
              Free access to educational materials twice a week through written articles, audio, images, and videos
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="{{ asset("/img/logo-image(2).png") }}"
                alt="" />
            </div>
            <h3 class="icon-title">ASR E-Library via Google Drive </h3>
            <p class="icon-caption">
              Access a wealth of sustainability knowledge with ease through our ASR E-Library on Google Drive. Enjoy the benefits of a comprehensive collection of resources at your fingertips, including reports, presentations, and other materials to support your sustainability journey 
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="{{ asset("/img/logo-image(3).png") }}"
                alt="" />
            </div>
            <h3 class="icon-title">Free Participation in National Webinar, Once a Month</h3>
            <p class="icon-caption">
              Maximize your learning and professional development with our monthly National webinars, featuring free access to certificates, Zoom recordings, training modules, e-books, audio, and video materials.
            </p>
          </div>
        </div>
      </div>
      
      <div class="grid-padding text-center">
        <div class="row">
        <div class="col-lg-4 column">
          <div class="icon">
            <img src="{{ asset("/img/logo-image(4).png") }}"
              alt="" />
            </div>
          <h3 class="icon-title">Free 1-on-1 Coaching and Mentoring for Customized Webinar Education</h3>
          <p class="icon-caption">
            Gain a competitive advantage with our free mentoring and 1-on-1 coaching sessions, designed to enhance your webinar learning experience and help you achieve your goals.
          </p>
        </div>
        <div class="col-lg-4 column">
          <div class="icon">
            <img src="{{ asset("/img/logo-image(5).png") }}"
            alt="" />
          </div>
          <h3 class="icon-title">Subsidy for ASR Academy (Competency Certification Training and Courses)</h3>
          <p class="icon-caption">
            Maximize your professional development opportunities and save money with ASR Academy's  subsidy program for training and competency certification courses.
          </p>
        </div>
        <div class="col-lg-4 column">
          <div class="icon">
            <img src="{{ asset("/img/logo-image(6).png") }}"
              alt="" />
          </div>
          <h3 class="icon-title">Affiliate All program </h3>
          <p class="icon-caption">
            Affiliate All is a program that offers benefits to members who join us. In this program, members have the opportunity to become affiliate partners and earn a 10% commission on every successful referral they make. It's an exciting opportunity to generate additional income through our affiliate network and expand their earning potential
          </p>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
</div>
</section>
<section class="h-150 w-100" style="box-sizing: border-box; background-color:#7987a6">
  <style scoped>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .content-3-7 .btn:focus,
    .content-3-7 .btn:active {
      outline: none !important;
    }

    .content-3-7 {
      padding: 5rem 2rem 7rem;
    }

    .content-3-7 .title-text {
      font: 800 1.875rem/2.25rem Poppins, sans-serif;
      letter-spacing: 0.05em;
      margin-bottom: 0.75rem;
      color: #2e3a53;
    }

    .content-3-7 .caption-text {
      font: 400 1rem/1.5rem Poppins, sans-serif;
      letter-spacing: 0.025em;
      color: #8e8fad;
      margin-bottom: 0;
    }

    .content-3-7 .card-item {
      transition: 0.4s;
      top: 0px;
      left: 0px;
      padding: 1rem 0;
      flex: 0 0 25%;
      max-width: 25%;
    }

    .content-3-7 .card-item:hover {
      top: -3px;
      left: -3px;
      transition: 0.4s;
    }

    .content-3-7 .card-item-outline {
      border: 1px solid #e5ebf9;
      padding: 2rem 2.75rem;
      border-radius: 1rem;
      background-color: white;
      margin: 20px;
    }

    .content-3-7 .price-title {
      font: 500 1.25rem/1.75rem Poppins, sans-serif;
      color: #141c2e;
      letter-spacing: 0.025em;
      margin-bottom: 0.75rem;
    }

    .content-3-7 .price-value {
      font: 500 2.25rem/2.5rem Poppins, sans-serif;
      letter-spacing: 0.025em;
      margin-bottom: 0.75rem;
      color: #2e3a53;
    }

    .content-3-7 .price-duration {
      font: 400 1rem/1.5rem Poppins, sans-serif;
      margin: 0.625rem;
      color: #9e9e9e;
    }

    .content-3-7 .price-caption {
      font: 400 1rem/1.5rem Poppins, sans-serif;
      letter-spacing: 0.025em;
      margin-bottom: 2.5rem;
      color: #c3c3c8;
    }

    .content-3-7 .price-list .check {
      font: 400 0.875rem/1.5rem Poppins, sans-serif;
      letter-spacing: 0.025em;
      color: #2e3a53;
      margin-bottom: 1.25rem;
    }

    .content-3-7 .price-list .cross {
      font: 400 0.875rem/1.5rem Poppins, sans-serif;
      letter-spacing: 0.025em;
      color: #9e9e9e;
      margin-bottom: 1.25rem;
    }

    .content-3-7 .btn {
      font: 500 1rem/1.5rem Poppins, sans-serif;
      letter-spacing: 0.025em;
      padding: 0.75rem 1.5rem;
      transition: 0.4s;
      margin-top: 2.5rem;
    }

    .content-3-7 .btn-primary {
      background-color: #f56a6a;
      border-color: #f56a6a;
      color: #fff;
    }

    .content-3-7 .btn-primary:hover {
      background-color: transparent;
      color: #f56a6a;
    }

    @media (max-width: 768px) {
      .content-3-7 .card-item {
        max-width: 100%;
        flex: 0 0 100%;
      }
    }
  </style>

  <div class="content-3-7 d-flex flex-wrap justify-content-center">
    <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
      <h2 class="title-text" style="color:white">Pricing That Everyone Works</h2>
      <p class="caption-text mx-auto" style="color:white">
        Choose one of our friendly pricing that suitable<br />
        for your business to grow bigger
      </p>
    </div>
    <div class="card-item">
      <div class="card-item-outline">
        <h2 class="price-title">Reguler</h2>
              <h6 >Student</h6>
              <h2 class="price-value d-flex align-items-center">
                <span>Rp. 24.000</span>
                <span class="price-duration">/Month</span>
              </h2>
              <h6 >General</h6>
              <h2 class="price-value d-flex align-items-center" style="font-size: 2.1rem">
                <span>Rp. 49.000</span>
                <span class="price-duration">/Month</span>
              </h2>
              <p class="price-caption">
                Suitable for those of you<br />
                who are beginners
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Webinar 1x
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Full Benefit Webinar
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>WA Group
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Mentoring
                </p>
              </div>
        <button class="btn btn-primary"><a class="text-white" href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform">Choose Plan</a> </button>
      </div>
    </div>
    <div class="card-item">
      <div class="card-item-outline">
        <h2 class="price-title">Silver</h2>
        <h6 >Pelajar</h6>
        <h2 class="price-value d-flex align-items-center">
          <span>Rp. 79.000</span>
          <span class="price-duration">/6 Month</span>
        </h2>
        <h6 >Umum</h6>
        <h2 class="price-value d-flex align-items-center"  style="font-size: 2.1rem">
          <span>Rp. 149.000</span>
          <span class="price-duration">/6 Month</span>
        </h2>
        <p class="price-caption">
          Suitable for those of you<br />
          who want to grow
        </p>
        <div class="price-list">
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>E-Member Card
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>E-Sertifikat Membership
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Webinar 6x
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Full Benefit Webinar
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Mentoring & 1o1 Coaching 
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Subsidi ALL Program 10% 
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Affiliate All Program 10 % 
          </p>

          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>WA Group 
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>E-Perpustakaan 
          </p>
          
        </div>

        <button class="btn btn-primary"><a class="text-white" href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform">Choose Plan</a> </button>
      </div>
    </div>
    <div class="card-item">
      <div class="card-item-outline" style="background-color: #ffe140">
        <h2 class="price-title">Gold</h2>
        <h6 >Pelajar</h6>
        <h2 class="price-value d-flex align-items-center">
          <span>Rp. 149.000</span>
          <span class="price-duration"style="color: #7987a6">/1 Year</span>
        </h2>
        <h6 >Umum</h6>
        <h2 class="price-value d-flex align-items-center"  style="font-size: 2.1rem">
          <span>Rp. 299.000</span>
          <span class="price-duration"style="color: #7987a6">/1 Year</span>
        </h2>
        <p class="price-caption" style="color: #7987a6">
          Suitable for those of you<br />
          who want to grow
        </p>
        <div class="price-list">
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Member Card
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>E-certificate Membersihip
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Webinar 12x
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Full Benefit Webinar
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Mentoring & 1o1 Coaching
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Subsidi All Program 20%
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Affiliate All Program 20%
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>WA Group
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>E-Perpustakaan
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Bonus T-shirt
          </p>
          <p class="d-flex align-items-center check">
            <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
              <img class="img-fluid"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                alt="" /> </span>Bonus Stiker
          </p>
         
        </div>
        <button class="btn btn-primary"><a class="text-white" href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform">Choose Plan</a> </button>
      </div>
    </div>
    <div class="card-item">
      <div class="card-item-outline" style="background-color: #2e3a53">
        <h2 class="price-title text-white">Platinum</h2>
        <h6 style="color:white">Pelajar</h6>
        <h2 class="price-value d-flex align-items-center" style="color:white">
          <span >Rp. 149.000</span>
          <span class="price-duration"style="color: #8997b5">/3 Year</span>
        </h2>
        <h6 style="color:white">Umum</h6>
        <h2 class="price-value d-flex align-items-center"  style="font-size: 2.1rem;color:white">
          <span>Rp. 299.000</span>
          <span class="price-duration"style="color: #8997b5">/3 Year</span>
        </h2>
              <p class="price-caption" style="color: #7987a6">
                Suitable to make your<br />
                company grow rapidly
              </p>
              <div class="price-list">
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>Member Card
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>E-Certificate Membership
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>Webinar 36x
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>Full Benefit Webinar
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>Mentoring & 1o1 Coaching
                </p>

                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>Subsidi All Program 30%
                </p>

                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                      alt="" /> </span>Affiliate All Program 30%
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>WA Group
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>E-Perpustakaan
                </p>
                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Bonus T-shirt
                </p>
                <p class="d-flex align-items-center check text-white ">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Bonus Stiker
                </p>

                <p class="d-flex align-items-center check text-white">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>Bonus Totebag
                </p>
              </div>
        <button class="btn btn-primary"><a class="text-white" href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform">Choose Plan</a> </button>
      </div>
    </div>
  </div>
</section>
 

  <style>
    .testimonials-section {
      background-color: #f9f9f9;
      padding: 40px;
      text-align: center;
    }

    .testimonials-title {
      font: 600 1.875rem/2.25rem Poppins, sans-serif;
      margin-bottom: 20px;
    }

    .testimonials-subline {
      font: 400 1rem/1.5rem Poppins, sans-serif;
      margin-bottom: 40px;
      color: #888;
      font-weight: bold;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      justify-items: center;
      margin-bottom: 20px;
    }

    .testimonial {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
    }

    .testimonial p {
      font-size: 14px;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    .testimonial-instagram {
      font-weight: bold;
      color: #333;
    }
  </style>
 <section class="testimonials-section">
  <h2 class="testimonials-title ">Testimonials</h2>
  <p class="testimonials-subline">Listen to captivating testimonials from participants about the services program we offer</p>
  <div class="testimonials-grid">
    <div class="testimonial">
      <p>"I am very happy to join this program ,because it can add insight and relationships and i hope this event can grow alumni who are mature in soft skills."</p>
      <p class="testimonial-instagram">@ristyanaa_mdw</p>
    </div>
    <div class="testimonial">
      <p>"Kesanku mengikuti  pelatihan dari ASR Academy selama kurang lebih 5 bulan( 1 semester ). Selain terjangkau kita berkesempatan magang , agar ilmu yang kita pelajari dapat di praktekan langsung di perusahaan ASR ."</p>
      <p class="testimonial-instagram">@sitimulyas11</p>
    </div>
    <div class="testimonial">
      <p>"Lewat webinar ini saya tau cara menjadi diri yang menakjubkan lewat pertanyaan pertanyaan saya jadi merasa lebih dekat dengan diri sendiri dan saya juga bisa memprogram ulang alam bawah sadar saya."</p>
      <p class="testimonial-instagram">@urbtyy</p>
    </div>
    <div class="testimonial">
      <p>"Keren banget, seru materi yang di kasih dan bermanfaat banget bagi banyak orang"</p>
      <p class="testimonial-instagram">@gebylizward_</p>
    </div>
  </div>
</section> 
  <section class="h1-00 w-100 bg-white" style="box-sizing: border-box">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-2 .btn:focus,
      .content-3-2 .btn:active {
        outline: none !important;
      }

      .content-3-2 {
        padding: 5rem 2rem;
      }

      .content-3-2 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
      }

      .content-3-2 .right-column {
        width: 100%;
      }

      .content-3-2 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
        color: #121212;
      }

      .content-3-2 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #121212;
      }

      .content-3-2 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #27c499;
      }

      .content-3-2 .text-caption {
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-3-2 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #27c499;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-2 .btn:hover {
        background-color: #45dbb2;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-2 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-2 .img-hero {
          width: 50%;
          margin-bottom: 0;
        }

        .content-3-2 .right-column {
          width: 50%;
        }

        .content-3-2 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }
    </style>
    
    <div class=" content-2-2 container-fluid mx-auto  position-relative" style="font-family: 'Poppins', sans-serif;" >
      <br>
      <div class="card-block" >
        <div class="card">
          <div class="d-flex flex-lg-row flex-column align-items-center">
            <div class="me-lg-3">
              <img
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                alt="" />
            </div>
            <div class="flex-grow-1 text-lg-start text-center card-text">
              <h3 class="card-title"  >
                Registration Form
              </h3>
              <p class="card-caption">
                Join our membership program today and gain exclusive access to our premium content! By registering as a member, <br class="d-none d-lg-block" /> you'll be able to unlock a wealth of valuable resources and take your skills to the next level.
                {{-- understand<br class="d-none d-lg-block" />
                market or business development. --}}
              </p>
            </div>
            <div class="card-btn-space">
              <button class="btn btn-card text-white" style="width: 200px"><a class="text-white" href="https://docs.google.com/forms/d/e/1FAIpQLSflolpIftADJwrfPCTmWauFplVQ4x5yEmmLQnkCepSYGpEwPg/viewform">Register</a></button>
              {{-- <button class="btn btn-outline">Demo Version</button> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <style>
    .contact-section {
  background-color: #f5f5f5;
  padding: 20px;
}

.contact-section h2 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.contact-details {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.contact-item {
  display: flex;
  align-items: center;
  margin-right: 30px;
  margin-bottom: 20px;
}

.contact-item i {
  font-size: 20px;
  margin-right: 10px;
}

.contact-item p {
  margin: 0;
  font-size: 16px;
}

.contact-item a {
  color: #333;
  text-decoration: none;
}

.contact-item a:hover {
  text-decoration: underline;
}

  </style>
  <section class="contact-section">
    <h2>Informasi Kontak</h2>
    <div class="contact-details">
      <div class="contact-item">
        <i class="fa fa-envelope"></i>
        <p>Email: <a href="mailto:info@organisasianda.com">asresourcesindonesia@gmail.com</a></p>
      </div>
      <div class="contact-item">
        <i class="fa fa-phone"></i>
        <p>Telepon: +62 857-2175-9682</p>
      </div>
      <div class="contact-item">
        <i class="fa fa-clock"></i>
        <p>Jam Kerja: Senin-Jumat, 9:00-17:00</p>
      </div>
    </div>
  </section>
  
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html> --}}
  @endsection