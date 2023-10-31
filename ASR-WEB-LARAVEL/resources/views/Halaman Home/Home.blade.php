@extends('layout.layout')

@section('content')
<link rel="stylesheet" href="{{ asset("/css/responsive.css") }}">
<style scoped>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

  * {
    font-family: 'Poppins', sans-serif !important;
  }

  body .content {
    background: #FFFFFF;
  }

  body .content .content {
    padding-top: 70px;
    padding-bottom: 70px;
  }

  body .content .content .headline {
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    font-size: 40px;
    line-height: 60px;
    color: #111F37;
  }

  body .content .content .subheadline-benefit {
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 28px;
    text-align: center;
    color: #627492;
  }

  body .content .content .rectangle {
    max-width: 100rem;
    max-height: 100rem;
    border: 1px solid #9BA8BE;
    box-sizing: border-box;
    border-radius: 26px;
    padding: 20px;
    margin-bottom: 100px;
  }

  body .content .content .rectangle img {
    display: block;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 20px;
  }

  body .content .content .rectangle .headline-benefit {
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 27px;
    color: #111F37;
  }

  body .content .content .benefits .rectangle .subheadline-benefit {
    margin-bottom: 20px;
  }

  .btn {
    display: inline-block;
    padding: 8px 20px;
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    line-height: 21px;
    border: none;
    text-align: center;
    cursor: pointer;
  }



  body .content .content .img-brand {
    margin-top: 50px;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .card-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .card {
    flex: 1;
  }

  @media only screen and (max-width: 900px) {
    .headline {
      font-size: 30px !important;
    }

    .subheadline-benefit {
      font-size: 16px !important;
    }
  }

  @media only screen and (max-width: 768px) {
    .headline {
      font-size: 24px !important;
    }

    .subheadline-benefit {
      font-size: 14px !important;
    }

    .card {
      width: 100%;
    }
  }

  @media only screen and (max-width: 576px) {
    .headline {
      font-size: 20px !important;
    }

    .subheadline-benefit {
      font-size: 12px !important;
    }
  }
  body .content .content .headline {
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    font-size: 40px;
    line-height: 60px;
    color: #111F37;
  }

  body .content .content .subheadline-benefit {
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 28px;
    text-align: center;
    color: #627492;
  }

  @media only screen and (max-width: 900px) {
    .headline {
      font-size: 30px !important;
    }

    .subheadline-benefit {
      font-size: 14px !important;
    }
  }

  @media only screen and (max-width: 576px) {
    .headline {
      font-size: 20px !important;
      margin-left: 0;
    }

    .subheadline-benefit {
      font-size: 12px !important;
      margin-left: 0;
    }

    .clients-slider {
      margin-left: 0;
    }
  }
  .testimonial-section {
  background-color: #f8f8f8;
  padding: 50px 0;
  text-align: center;
}

.testimonial-header h2 {
  font-size: 32px;
  color: #333;
  margin-bottom: 20px;
}

.testimonial-subline {
  font-size: 18px;
  color: #666;
  margin-bottom: 40px;
}

.testimonial-cards {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.testimonial-card {
  width: 300px;
  padding: 20px;
  margin: 10px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

blockquote {
  font-size: 16px;
  line-height: 1.6;
  color: #555;
  margin-bottom: 20px;
}

.instagram-username {
  font-size: 14px;
  color: #888;
}

@media (max-width: 768px) {
  .testimonial-card {
    width: 100%;
    max-width: 400px;
  }
}
.our-finest-work-section {
    padding: 60px 0;
    background-color: lightslategray; /* Updated background color */
  }

  .section-title {
    text-align: center;
    margin-bottom: 10px;
  }

  .section-subtitle {
    text-align: center;
    color: #888;
    margin-bottom: 30px;
  }

  .project-cards {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: stretch; /* Ensures equal card heights */
  }

  .project-card {
    flex-basis: calc(25% - 20px);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .project-card img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
  }

  .project-name {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .project-description {
    font-size: 14px;
    color: #888;
  }

  @media (max-width: 900px) {
    .project-cards {
      justify-content: center;
    }

    .project-card {
      flex-basis: calc(50% - 20px);
    }
  }

  @media (max-width: 600px) {
    .project-card {
      flex-basis: calc(100% - 20px);
    }
  }
</style>

<section id="heros" class="d-flex align-items-center" >

  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <div class="row">
      <div class="col-xl-6">
        <h1 style="font-weight:bolder; font-size:50px;">Who We Are</h1><br><br>
        <h2>   <div class="subheadline-benefit mt-2"   >
          Actual Self Resources (ASR) Indonesia is a digital platform-based Start-Up Company in Human Resource Development services.<br class="d-none d-md-block">
          Among them are Academy, Ambassador, Career, Creativity, Consulting, Community, and Store       </div>  </h2>
        <a href="#about" class="btn-get-started scrollto" style="background-image: url({{ asset("/img/Untitled13.png") }});color: white;border-radius: 10%;"> Learn More</a>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<div>


<div class="slide2" >


  <section class="content">
    <div class="container">
      <div class="row content">
        <div class="col-12 px-md-0 my-auto">
          <div class="headline mt-3 text-center" style="font-weight: bolder; font-size: 40px;">
            What We Provide
          </div>
          <div class="subheadline-benefit mt-2 text-center">
            Our vision is to empower the young generation to realize their full potential, raise awareness, and lead authentic and purposeful lives. At ASR, we strive to achieve this by offering a range of transformative services and programs.
          </div>
          <div class="row benefits text-center px-0" style="justify-content: center;" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-2">
                <img src="{{ asset('/img/design_1_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%; color: black;">
                <div class="headline-benefit mt-3">
                  ASR Ambassador
                </div>
                <div class="subheadline-benefit mt-2">
                  ASR Ambassador is a program that invites individuals to become ambassadors for ASR, serving as spokespersons and content creators. Through webinars, socialization activities, speaking engagements, and content creation, ambassadors help expand the presence of ASR, develop businesses, and establish collaborations with various stakeholders. The program provides individuals with opportunities to contribute to personal growth, disseminate information, and build beneficial partnerships. <br><br><br><br><br><br><br>
                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-1">
                <img src="{{ asset('/img/design_2_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%;">
                <div class="headline-benefit mt-3">
                  ASR Academy
                </div>
                <div class="subheadline-benefit mt-2">
                  ASR Academy is an inclusive education platform focused on human resource development (HRD). It offers a range of programs including webinars, training sessions, school courses, and mentoring. These programs aim to enhance individuals' skills and knowledge in various fields. Webinars provide up-to-date insights from experts, training sessions offer interactive learning experiences, school courses delve deeper into specific subjects with structured curricula, and mentoring provides personalized guidance and support in career development or specific areas of interest. ASR Academy prioritizes inclusivity in education, providing access to individuals from diverse backgrounds and skill levels. Its goal is to empower individuals to reach their full potential in HRD.
                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-1">
                <img src="{{ asset('/img/design_3_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%;">
                <div class="headline-benefit mt-3">
                  ASR Career
                </div>
                <div class="subheadline-benefit mt-2">
                  
                ASR CAREER is a service provided by PT Actual Self Resources that offers programs and information related to career development. Our program lineup includes high-quality webinars, interactive and effective workshops, targeted and constructive mini bootcamps, up-to-date job and internship listings, educational content to broaden your insights, and career guidance services. We aim to empower individuals in their career journeys by providing valuable resources and practical guidance for professional growth. Join ASR CAREER to unlock new opportunities and enhance your career prospects. <br><br><br><br><br>
                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
          </div>
  
          <div class="row benefits text-center px-0" style="justify-content: center;"uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-1">
                <img src="{{ asset('/img/design_4_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%;">
                <div class="headline-benefit mt-3">
                  ASR Creativity
                </div>
                <div class="subheadline-benefit mt-2">
                  ASR Creativity is a digital platform that provides individuals a space to express themselves through various forms of creative works in Human Resources Development (HRD). The platform offers programs encompassing text-based content like Twitter and articles, audio content through Anchor podcasts, Spotify, and Noice, visual content on Instagram, Facebook, and LinkedIn, and video content including short videos on Reels IG, FB, TikTok, and YouTube, as well as long-form videos if possible. ASR Creativity aims to create informative, educational, and entertaining content that introduces teams, service programs, and creative content aligned with ASR's vision and mission. Additionally, the platform offers webinars or training programs on creativity, supports creative business ventures, organizes creative competitions, and expands collaborations with government, companies, educational institutions, organizations, communities, professionals, sponsors, media partners, and more.
                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-1">
                <img src="{{ asset('/img/design_5_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%;">
                <div class="headline-benefit mt-3">
                  ASR Consulting
                </div>
                <div class="subheadline-benefit mt-2">
                 
                  ASR Consulting is a consulting and mentoring service that offers a range of programs to support mental health and personal development. The programs provided include consultation/companionship, life coaching, psychotherapy/hypnotherapy, mental health webinars, workshops/training in mental health skills, counseling skills, and more. ASR Consulting also assists in business development and creating informative, educational, and entertaining content aligned with their vision and mission. Additionally, ASR Consulting aims to expand collaborations with government entities, companies, educational institutions, organizations, communities, professionals, sponsors, media partners, and others, in order to provide wider and more effective services to the community. <br> <br><br><br><br><br>

                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-1">
                <img src="{{ asset('/img/design_6_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%;">
                <div class="headline-benefit mt-3">
                  ASR Society
                </div>
                <div class="subheadline-benefit mt-2">
                  ASR Society is a service that aims to develop society through various programs and activities. The services provided include training on volunteering, personal development, mental health, leadership, humanitarianism, environmentalism, entrepreneurship, and other topics. Additionally, ASR Society offers mentoring, discussions, socialization, and educational training in schools and other settings. They are actively involved in social service and community engagement, as well as organizing regional ASR gatherings and managing regional ASR operations. ASR Society also ventures into business initiatives and creates informative, educational, and entertaining content that introduces their team, service programs, and creative endeavors in line with ASR's vision and mission. They strive to expand collaborations with government institutions, corporations, educational institutions, organizations, communities, professionals, sponsors, media partners, and others to achieve their goals. <br><br>
                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
          </div>
  
          <div class="row benefits text-center px-0" style="justify-content: center;" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
            <div class="col-md-4 mt-5">
              <div class="rectangle mx-auto px-1">
                <img src="{{ asset('/img/design_7_.png') }}" alt="benefits-1" class="img-fluid" style="border-radius: 50%;">
                <div class="headline-benefit mt-3">
                  ASR Business & Store
                </div>
                <div class="subheadline-benefit mt-2">
                  ASR Store is a service that offers a wide range of products and programs related to self-development, business, and entrepreneurship. The service includes the sale of books covering various topics such as psychology, self-improvement, and business. Additionally, ASR Store provides a selection of clothing items such as T-shirts, polo shirts, jackets, hats, and accessories like phone cases, LED water bottles, stickers, and tote bags. In addition to the products, ASR Store organizes programs such as entrepreneurship webinars, workshops, and training sessions to assist individuals and organizations in building their businesses. ASR Store also focuses on creating informative, educational, and entertaining content that encompasses team introductions, service program details, and creative content aligned with ASR's vision and mission. Moreover, ASR Store aims to expand collaborations with government agencies, companies, educational institutions, organizations, communities, professionals, sponsors, and media partners to foster mutually beneficial partnerships.
                </div>
                <button type="button" class="btn" style="background-image: url({{ asset('/img/Untitled13.png') }}); color: white; border-radius: 10%;">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section class="our-finest-work-section">
      <div class="container">
        <h2 class="section-title headline mt-3 text-center" style="color: white;font-weight: 600; font-weight: bolder; font-size: 50px;">Our Finest Work</h2>
        <p class="section-subtitle subheadline-benefit mt-2" style="color: white">Our Finest Work showcases the culmination of our organization's commitment to excellence and dedication to achieving outstanding results.</p>
        <div class="project-cards">
          <div class="project-card">
            <img src="{{ asset('/img/Foto4.png') }}" class="card-img-top" alt="Project 1">
            <h3 class="project-name">Training Hipnoterapi</h3>
            <p class="project-description">Training Hipnoterapi<br class="d-none d-md-block">
              Dinas Kesehatan Kota Serang Banten<br class="d-none d-md-block">
              Kampioen Bed & Breakfast Hotel Bandung<br class="d-none d-md-block">
              10 Oktober 2019</p>
          </div>
          <div class="project-card">
            <img src="{{ asset('/img/Foto5.png') }}" class="card-img-top" alt="Project 2">
            <h3 class="project-name">Seminar Nasional</h3>
            <p class="project-description">Seminar Nasional Terdashyat Aktualisasi Diri Adrian Septiadi (AS) Resources & Komunitas<br class="d-none d-md-block">
              Lingkar Studi Aktualisasi Diri UIN Sunan Gunung DJati Bandung<br class="d-none d-md-block">
              19 Oktober 2019</p>
          </div>
          <div class="project-card">
            <img src="{{ asset('/img/foto14.jpg') }}" class="card-img-top" alt="Project 4">
            <h3 class="project-name">Webinar & Online Training</h3>
            <p class="project-description">Webinar & Online Training<br class="d-none d-md-block">
              "Tema Soft Skill Pengembangan Diri & Mental Health" Berjumlah kurang lebih 50 kegiatan, diikuti oleh ribuan<br class="d-none d-md-block">
              peserta dari berbagai background dan dari berbagai wilayah Indonesia Timor Leste, Malaysia & Singapura PT Actual Self Resources(ASR)&Collaboration<br class="d-none d-md-block">
              Masa Pandemik 2020-Sekarang</p>
          </div>
          <div class="project-card">
            <img src="{{ asset('/img/Foto6.png') }}" alt="Project 3">
            <h3 class="project-name">Training NLP</h3>
            <p class="project-description">Training NLP<br class="d-none d-md-block">
              Instructor Management Business of Training LKP Indonesian Life Skill Academy (ILSA)<br class="d-none d-md-block">
              Fave Hotel Bandung<br class="d-none d-md-block">
              1-2 Mei 2021</p>
          </div>
        </div>
        <a href={{ route('AboutUs.Finest') }} class="btn btn-primary">See More Projects</a>
      </div>
    </section>
    
    
    <section class="testimonial-section">
      <div class="container">
        <h2 class="section-title headline mt-3" style="font-weight: bolder; font-size: 40px;">What Our Customers Say</h2>
        <div class="testimonial-cards">
          <div class="testimonial-card">
            <div class="quote">  "I am very happy to join this program ,because it can add insight and relationships and i hope this event can grow alumni who are mature in soft skills."</div>
            <div class="username">@ristyanaa_mdw</div>
          </div>
          <div class="testimonial-card">
            <div class="quote"> "Kesanku mengikuti  pelatihan dari ASR Academy selama kurang lebih 5 bulan( 1 semester ). Selain terjangkau kita berkesempatan magang , agar ilmu yang kita pelajari dapat di praktekan langsung di perusahaan ASR ."</div>
            <div class="username">@sitimulyas11</div>
          </div>
          <div class="testimonial-card">
            <div class="quote">"Lewat webinar ini saya tau cara menjadi diri yang menakjubkan lewat pertanyaan pertanyaan saya jadi merasa lebih dekat dengan diri sendiri dan saya juga bisa memprogram ulang alam bawah sadar saya." </div>
            <div class="username">@urbtyy</div>
          </div>
          <div class="testimonial-card">
            <div class="quote">"Keren banget, seru materi yang di kasih dan bermanfaat banget bagi banyak orang "</div>
            <div class="username">@gebylizward_</div>
          </div>
          <div class="testimonial-card">
            <div class="quote">"Keren bangett sih ini betul-betul nge-gali tentang diri sendiri, jadi bisa lebih harga-in diri sendiri lebih percaya diri sendiri,lebih tau tentang potensi dan kemampuan diri sendiri , bisa belajar tentang self healing , self reminder, self love, dan bahkan tadi bisa ikut meditasi gitu asik deh"</div>
            <div class="username">@Jennifer_twyln</div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="container-fluid">
      <br><br>
      <div class="container">
        <div class="headline mt-3 text-center" style=" font-weight: 600; font-weight: bolder; font-size: 50px;">
          Our Client
        </div>        <br>
        <div class="subheadline-benefit mt-2" style="margin-left: 5%;">
          Our Clients are our top priority, and we take pride in providing them with exceptional value and service. Whether you need support with product selection, technical assistance, or account management, we are here to help. With a focus on quality, reliability, and innovation, we strive to build lasting relationships with our clients based on trust and mutual respect.
        </div>
        <br><br>
      </div>
      <section id="clients">
        <div class="container" data-aos="zoom-in">
          <div class="clients-slider swiper" style="margin-left: 5%;">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="https://dinkes.serangkota.go.id/includes/images/logo.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/logo1.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="https://pbs.twimg.com/profile_images/1096641383295643649/uVvpbJlo_400x400.jpg" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/image-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/image-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/logo3.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/logo5.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/logo4.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/img/logo2.png') }}" class="img-fluid" alt=""></div>
            </div>
            <br><br><br>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section><!-- End Clients Section -->
      <br><br>
      <br><br><br>
    </div>

    <div style="background-color: #778a95;">
      <div id="carouselExampleIndicators" class="carousel slide" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
        <br><br>
        <center>
          <div class="container">
            <div class="headline mt-3 text-center" style="color:white; font-weight: 600; font-weight: bolder; font-size: 50px;">
              News & Event
            </div>
            <br><br>
          </div>
        </center>
        <br><br><br>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true" style="margin-left: 5%; margin-right: 5%;">
          <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m">
            @foreach ($news as $item)
            <li>
              <a href="/News&Event/Event&Activities">
                <img src="{{ asset('/image/' . $item->gambar) }}" width="100%" height="auto" style="object-fit: cover; object-position: center; max-height: 550px;" alt="">
              </a>
            </li>
            @endforeach
          </ul>
          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous" style="background-color: white; color: black; border-radius: 100%;"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next" style="background-color: white; color: black; border-radius: 100%;"></a>
        </div>
        <br><br><br><br><br><br><br>
      </div>
    </div>
    
    

@endsection

 