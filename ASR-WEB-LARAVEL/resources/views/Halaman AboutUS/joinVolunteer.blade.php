
@extends('layout.layout')

@section('content')



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {{-- <title>Presento Bootstrap Template - Index</title> --}}
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: Presento
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  .card-wrapper {
    display: flex;
    flex-wrap: wrap;
    width: 20px;
  }
  
  .ard {
    flex: 1;
  }

#btn{
  border: 2px solid #31CBA1;
  background: #31CBA1;
  color: white;
}

</style>

<body>


  <!-- ======= Hero Section ======= -->
  <section id="heros" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>"Join Our Community of Dedicated Volunteers and Make a Difference: Explore Opportunities to Contribute and Support Our Mission</h1><br><br>
         
        </div>
      </div>
    </div>
  
  </section><!-- End Hero -->
  
  <main id="main">

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
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
          padd ing-bottom: 1rem;
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
            float: right;
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
          <div class="headline mt-3  " style=" font-weight:bolder; font-size:50px;" >
            {{-- The Reasons Why We <br class="d-none d-md-block">
              Might Fit For Your Business --}}
              Benefit
              {{-- <h1 class="text-title">Benefit</h1> --}}
  
            </div>
            <br>
            <div class="subheadline-benefit mt-2"  style="font-size:30px" >
              these are the benefits you get by joining us
              {{-- <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
              
              </p> --}}
            </div>
        </div>
  
        <div class="grid-padding text-center" >
          <div class="row">
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="{{ asset("/img/logo-image1.png") }}"
                  alt="" />
              </div>
              <h3 class="icon-title">Gained experience working in Human Resources development start-ups</h3>
              <p class="icon-caption">
                Maximize your career opportunities and stay ahead of the game by gaining valuable experience working in Human Resources development start-ups.
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="{{ asset("/img/logo-image2.png") }}"
                  alt="" />
              </div>
              <h3 class="icon-title">
                Free ASR member & Free access to all ASR Indonesia services</h3>
              <p class="icon-caption">
                Unlock the benefits of sustainable living with free ASR membership and complimentary access to all ASR Indonesia services
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="{{ asset("/img/logo-image3.png") }}"
                  alt="" />
              </div>
              <h3 class="icon-title">Building relationships and connections within ASR Indonesia's network</h3>
              <p class="icon-caption">
                "Unlock new opportunities and gain valuable insights by building strong relationships and connections within ASR Indonesia's extensive network
              </p>
            </div>
          </div>
        </div>
  
        <div class="grid-padding text-center">
          <div class="row">
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="{{ asset("/img/logo-image4.png") }}"
                  alt="" />
              </div>
              <h3 class="icon-title">LinkedIn Recommendations </h3>
              <p class="icon-caption">
                Maximize your professional potential with compelling LinkedIn recommendations that showcase your skills and experience
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="{{ asset("/img/logo-image5.png") }}"
                  alt="" />
              </div>
              <h3 class="icon-title">Developing your soft skills for personal and professional growth</h3>
              <p class="icon-caption">
                Developing your soft skills can lead to improved communication, greater leadership potential, and increased job satisfaction, both personally and professionally
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="{{ asset("/img/logo-image6.png") }}"
                  alt="" />
              </div>
              <h3 class="icon-title">Digital Volunteer Certification</h3>
              <p class="icon-caption">
                Gain a competitive edge in the job market and showcase your skills with our Digital Volunteer Certification program
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><section class="h1-00 w-100 bg-white" style="box-sizing: border-box">
    
      <section id="about" class="about  text-white"  style="background-color:lightslategray;color:white;">
        <div class="container">
          <div class="headline mt-3 text-center">
            <h2 class="font-weight-bold" style="font-size: 50px;">What is ASR</h2> <br>
          </div>
          <br>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h3>Actual Self Resources (ASR) Indonesia</h3>
              <p>
                Actual Self Resources (ASR) Indonesia is a digital platform-based Start-Up Company in Human Resource Development services. Among them are Academy, Ambassador, Career, Creativity, Consulting, Community, and Store.
              </p><br><br>
              <a href="#" class="btn " id="btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </section>
      
      <section id="tabs" class="tabs">
        <div class="container" data-aos="fade-up">
          <div class="headline mt-3 text-center" style="font-weight: bolder; font-size: 50px;">
            Open Position
          </div>
          <br><br>
          <div class="row">
            <div class="col">
              <ul class="nav nav-tabs d-flex" role="tablist">
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link active" id="tab-1" data-bs-toggle="tab" href="#content-creator">Content Creator</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-2" data-bs-toggle="tab" href="#content-writer">Content Writer</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-3" data-bs-toggle="tab" href="#customer-service">Customer Service</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-4" data-bs-toggle="tab" href="#finance">Finance</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-5" data-bs-toggle="tab" href="#graphic-designer">Graphic Designer</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-6" data-bs-toggle="tab" href="#hrd">HRD (Human Resource Development)</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-7" data-bs-toggle="tab" href="#mc-moderator">MC & Moderator</a>
                </li>
                <li class="nav-item col-6 col-md-3">
                  <a class="nav-link" id="tab-8" data-bs-toggle="tab" href="#project-officer">Project Officer</a>
                </li>
              </ul>
            </div>
          </div>
          <br>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="content-creator">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>Content Creator</h3>
                  <p class="job-description">Job Description: Prepare strategies & create content that is right on target.</p>
                  <p class="job-requirement">Job Requirement: Bachelor's degree in Marketing or related field, experience in content creation, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="content-writer">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>Content Writer</h3>
                  <p class="job-description">Job Description: Write engaging and creative content for various platforms.</p>
                  <p class="job-requirement">Job Requirement: Excellent writing skills, knowledge of SEO, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="customer-service">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>Customer Service</h3>
                  <p class="job-description">Job Description: Provide excellent customer support and resolve inquiries or complaints.</p>
                  <p class="job-requirement">Job Requirement: Strong communication skills, patience, ability to handle difficult situations, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="finance">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>Finance</h3>
                  <p class="job-description">Job Description: Manage financial transactions, budgets, and reports.</p>
                  <p class="job-requirement">Job Requirement: Bachelor's degree in Finance or related field, knowledge of accounting software, attention to detail, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="graphic-designer">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>Graphic Designer</h3>
                  <p class="job-description">Job Description: Create visually appealing graphics and designs for various projects.</p>
                  <p class="job-requirement">Job Requirement: Proficiency in graphic design software, creative thinking, attention to detail, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="hrd">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>HRD (Human Resource Development)</h3>
                  <p class="job-description">Job Description: Manage recruitment, training, and employee development programs.</p>
                  <p class="job-requirement">Job Requirement: Bachelor's degree in Human Resources or related field, knowledge of HR policies and procedures, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-6.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="mc-moderator">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>MC & Moderator</h3>
                  <p class="job-description">Job Description: Host events, moderate discussions, and engage with the audience.</p>
                  <p class="job-requirement">Job Requirement: Excellent communication skills, confidence, ability to handle public speaking, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-7.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="project-officer">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>Project Officer</h3>
                  <p class="job-description">Job Description: Plan, execute, and monitor project activities and deliverables.</p>
                  <p class="job-requirement">Job Requirement: Strong organizational and project management skills, attention to detail, etc.</p>
                  <a href="#" class="apply-btn">Apply Now</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/tabs-8.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="background-color:lightslategray; color:white;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <div class="headline mt-3  " style=" font-weight:bolder; font-size:50px;" >
            {{-- The Reasons Why We <br class="d-none d-md-block">
              Might Fit For Your Business --}}
              Qualification
              {{-- <h1 class="text-title">Benefit</h1> --}}
  
            </div>
            <br>
            <div class="subheadline-benefit mt-2"  style="font-size:20px" >
              By registering as a volunteer, you agree to abide by our guidelines and policies to ensure a safe and positive volunteering experience. Thank you for your commitment to our cause!
              {{-- <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
              
              </p> --}}
            </div>
            
          
          </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-1-square"></i>
              <h4><a href="#">Follow IG @asresourcesindonesia</a></h4>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-2-square"></i>
              <h4><a href="#">
                Attach the latest Cv</a></h4>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-3-square"></i>
              <h4><a href="#">Attach portfolio</a></h4>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-4-square"></i>
              <h4><a href="#">willing to actively contribute for 6 months (WFH)</a></h4>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-5-square" ></i>
              <h4><a href="#">willing to actively manage ASR activities per region (Hybrid Working)</a></h4>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-6-square"></i>
              <h4><a href="#">Responsible, innovative, creative, adaptive, communicative & collaborative</a></h4>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-7-square"></i>
              <h4><a href="#">
                Able to work in team</a></h4>
            </div>
          </div>
        
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-8-square"></i>
              <h4><a href="#">
                Have an interest in HR development</a></h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    {{--  4 process recruitment  --}}

    <section class="choose">
      <style scoped>
          @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
  
          * {
              font-family: 'Inter', sans-serif !important;
          }
  
          /* body .choose {
              background-color: #F9FCFC;
          } */
  
          body .choose h1 {
              color: #232323;
              font-weight: 700 !important;
          }
  
          body .choose p {
              color: #879FB0;
          }
  
          @media screen and (min-width: 768px) {
              body .choose h1 {
                  font-size: 60px !important;
              }
          }
  
          body .cl-blue {
              color: #0F52BA !important;
          }
      </style>
      <div class="container pb-4 px-4">
          <div class="row text-center d-block pt-5 pb-md-4">
            <div class="headline mt-3  " style=" font-weight:bolder; font-size:50px;" >
              {{-- The Reasons Why We <br class="d-none d-md-block">
                Might Fit For Your Business --}}
                Candidate Selection Steps
                {{-- <h1 class="text-title">Benefit</h1> --}}
    
              </div>
              {{-- <h1 class="my-3">
                Candidate Selection Steps
              </h1> --}}
              
          </div>
          <div class="row py-5">
              <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                  <img src="{{ asset('/img/edit(3).png') }}"
                      alt="taxes" class="img-fluid" style="margin-top:15px">
                  <img src="{{ asset('/img/edit(4).png') }}"
                      alt="taxes" class="img-fluid" style="display: none;margin-top:15px;">
                  <p class="font-weight-bold mt-4 mb-1 cl-blue">
                    Registration
                  </p>
                  <p class="mb-0">
                      19 Maret - 26 Maret 2023
                  </p>
              </div>
              <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                  <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user.svg"
                      alt="user" class="img-fluid">
                  <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user-color.svg"
                      alt="user" class="img-fluid" style="display: none;">
                  <p class="font-weight-bold mt-4 mb-1 cl-blue">
                    Resume Screening
                  </p>
                  <p class="mb-0">
                      28 Maret 2023
                  </p>
              </div>
              <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                  <img src="{{ asset('/img/png-1.png') }}"
                      alt="discount" class="img-fluid" >
                  <img src="{{ asset('/img/png-2.png') }}"
                      alt="user" class="img-fluid" style="display: none;">
                  <p class="font-weight-bold mt-4 mb-1 cl-blue">
                      Interview
                  </p>
                  <p class="mb-0">
                     01 April - 02 April 2023
                  </p>
              </div>
              <div class="col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                  <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar.svg"
                      alt="calendar" class="img-fluid">
                  <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar-color.svg"
                      alt="user" class="img-fluid" style="display: none;">
                  <p class="font-weight-bold mt-4 mb-1 cl-blue">
                      Announcement
                  </p>
                  <p class="mb-0">
                      06 April 2023
                  </p>
              </div>
          </div>
      </div>
  
      <script>
          function coloringgoals(x) {
              x.classList.add('bg-white');
              x.classList.add('rounded-24');
              x.childNodes[1].style.display = "none";
              x.childNodes[3].style.display = "block";
          }
  
          function normalgoals(x) {
              x.classList.remove('bg-white');
              x.classList.remove('rounded-24');
              x.childNodes[1].style.display = "block";
              x.childNodes[3].style.display = "none";
          }
      </script>
  </section> 
  
  <div class=" content-2-2 container-fluid mx-auto  position-relative" style="font-family: 'Poppins', sans-serif;" >
    <br>
    <div class="card-block" >
      <div class="card" style="background-color:lightslategray" >
        <div class="d-flex flex-lg-row flex-column align-items-center">
          <div class="me-lg-3">
            <img
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
              alt="" />
          </div>
          <div class="flex-grow-1 text-lg-start text-center card-text" >
            <h2 class="card-title" style="color: #fff;font-weight:bolder;font-size:35px;">
              
              Registration Form
            </h2>
            <br>
            <p class="card-caption" style="color: #fff;">
              Join our team of passionate and dedicated volunteers! As a volunteer, you'll have the opportunity to make a difference in  your community <br class="d-none d-lg-block" /> and help those in need.
              Whether you're interested in volunteering for a one-time event or a long-term project, we have a variety of opportunities <br class="d-none d-lg-block" /> available to suit your interests and skills. 
              By registering as a volunteer, you'll also gain valuable experience, make new friends, and contribute to a cause <br class="d-none d-lg-block" />that you care about. 
              So why wait? Sign up today and start making a positive impact in the world!
              
            </p>
          </div>
          <div class="card-btn-space">
            <button class="btn btn-card text-white" style="width: 200px;  border: 2px solid #31CBA1;background: #31CBA1;">Join Us</button>
            {{-- <button class="btn btn-outline">Demo Version</button> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <div class="headline mt-3  " style=" font-weight:bolder; font-size:50px;" >
            {{-- The Reasons Why We <br class="d-none d-md-block">
              Might Fit For Your Business --}}
              Frequently Asked Questions
              {{-- <h1 class="text-title">Benefit</h1> --}}
  
            </div>
        </div>
        <br><br>

        <ul class="faq-list accordion" data-aos="fade-up">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1" role="button" aria-expanded="false" aria-controls="faq1" >Announcement via WhatsApp or email? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse multi-collapse"  data-bs-parent=".faq-list">
              <p>
                Announcements will be sent via email
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">is this volunteer position paid?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                No, this volunteer position is unpaid
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Is it necessary to install the Twibbon? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Of course, prospective volunteers are required to use the Twibbon
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">What is the required time commitment for volunteering? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                This volunteer program runs for 6 months
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Are there any specific requirements or skills needed to become a volunteer in this program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                "No, there are no specific requirements. Instead, the required skills are listed based on the qualifications determined for the program.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Will there be any training or briefing provided before starting the volunteer tasks? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
               Yes, there will be training or briefing provided before starting your duties as a volunteer. Training is conducted once a month for general training."
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

      </main><!-- End #main -->



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

</body>

</html>


@endsection