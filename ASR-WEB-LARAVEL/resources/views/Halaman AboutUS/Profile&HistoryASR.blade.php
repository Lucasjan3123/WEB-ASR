@extends('layout.layout')

@section('content')

<style>
#section1 {
  background-color: #ffffff;
}

#section2 {
  background-color: lightslategray;
  color: #ffffff;
}

#section3 {
  background-color: #f1f1f1;
}


    #section1,
#section2,
#section3 {
  padding: 80px 0;
}

.section-title {
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    font-size: 35px;
    line-height: 67px;
    color: #111F37;
      margin-bottom: 20px;
}
.subheadline-benefit{
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 28px;
    /* or 175% */
    /* text-align: center; */
    color: #627492;
    /* margin-bottom: 40px; */
}
.section-content p {
  margin-bottom: 20px;
}

.timeline-frame {
  position: relative;
}
/* The actual timeline (the vertical ruler) */
.timeline-frame:after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: 2px;
}

/* timeline-contain around content */
.timeline-frame .timeline-contain {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline-frame .timeline-contain::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 20px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the timeline-contain to the left */
.timeline-frame .left {
  left: 0;
}

/* Place the timeline-contain to the right */
.timeline-frame .right {
  left: 51%;
}

/* Add arrows to the left timeline-contain (pointing right) */
.timeline-frame .left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right timeline-contain (pointing left) */
.timeline-frame .right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for timeline-contains on the right side */
.timeline-frame .right::after {
  left: -16px;
}

/* The actual konten */
.timeline-frame .konten {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
.timeline-frame::after {
    left: 8%;
    margin-left: 0px;
}
  
  /* Full-width timeline-contains */
  .timeline-frame .timeline-contain {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .timeline-frame .timeline-contain::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .timeline-frame .left::after, .timeline-frame .right::after {
  left: 15px;
  }
  
  /* Make all right timeline-contains behave like the left ones */
  .timeline-frame .right {
  left: 0%;
  }
}

@media (max-width: 767px) {
  #photo{
    margin-top: 5rem;
  }
  .col-md-6 {
    text-align: center;
  }

  .vertical-line {
    display: none;
  }

  .timeline-item::before {
    left: 50%;
    transform: translateX(-50%);
  }
}

</style>
<section id="section1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-content">
            <h2 class="section-title">Founder ASR</h2>
            <div class="subheadline-benefit ">
                Adrian Septiadi is a learner and person who proactively voices and provides HR development training. Study psychology academic education with an interest in psychoanalysis and existential-humanistic as well as soft skills.<br class="d-none d-md-block"> <br>
                The goal is to help individuals and groups in need in awakening their unconscious in caring for mental health, becoming authentic human beings, actualizing their potential, developing soft skills and achieving a meaningful life.
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <img src="{{ asset("/img/founder.png") }}" alt="Founder "  id="photo" style="width: 70%;" >
        </div>
      </div>
    </div>
  </section>
  
  <section id="section2">
    <div class="container">
      <div class="section-content ">
        <h2 class="section-title text-center" style="color: white">About AS Resources Indonesia</h2>
        <p>AS Resources Indonesia is a digital platform-based Start-Up Company offering Human Resource Development services. Our organization comprises various divisions, including Academy, Ambassador, Career, Creativity, Consulting, Community, and Store.</p>
        <p>Founded by Adrian Septiadi and Ismi Shofayana on October 4, 2020, ASR aims to awaken individuals' unconsciousness, empowering them to become authentic human beings, actualize their potential, and lead meaningful lives.</p> <br>
        <h3>Our Vision</h3><br>
        <p>At ASR, our vision is to create authentic human beings by helping individuals actualize their best potential and achieve a meaningful life. We believe in the power of personal growth and self-discovery to unlock true potential and foster a sense of purpose.</p> <br>
        <h3>Core Values and Culture</h3><br>
        <p>ASR embodies a set of core values that guide our actions, decisions, and interactions within the organization. These principles reflect our commitment to personal development, integrity, and fostering a positive and inclusive environment. Our core values are:</p><br>
        <ul style="list-style: decimal">
          <li><h5>Awareness, Uniqueness, and Potential : </h5> <p>We recognize and celebrate the awareness, uniqueness, and untapped potential within each individual.</p></li>
          <li><h5>Free Will and Responsiveness : </h5><p>We respect and encourage free will, empowering individuals to respond actively and make meaningful choices.</p></li>
          <li><h5>Self-Actualization :</h5><p>We believe in the power of self-actualization, helping individuals unleash their full potential and achieve personal growth.</p></li>
          <li><h5>Meaningful Life : </h5><p>We are dedicated to helping individuals lead a meaningful life by aligning their actions and aspirations with their core values.</p></li>
        </ul><br>
        <h3>Our Impact</h3> <br>
        <p>ASR has made a significant positive impact on individuals and communities. Through our volunteer and internship programs, we have mentored over 1,000 students, primarily from schools and universities across Indonesia. Additionally, we have conducted seminars, webinars, training sessions, and courses that have benefitted over 10,000 participants from diverse educational and professional backgrounds in Indonesia, Timor Leste, Malaysia, and Singapore.</p><br>
        <h3>Our Commitment</h3><br>
        <p>We embrace a set of values and cultural principles that shape our organization's identity. These values define who we are and how we operate. Our commitments are:</p><br>
        <ul style="list-style: decimal">
          <li><h5>Devotion to the Divine :</h5><p> We uphold devotion to the Supreme Being in all our endeavors.</p></li>
          <li><h5>ASR Values: </h5><p>We apply the core values of ASR to become authentic human beings and lead meaningful lives.</p></li>
          <li><h5>Responsibility and Integrity :</h5><p> We carry out our duties with utmost responsibility, integrity, loyalty, dedication, and a strong commitment to humanitarian values.</p></li>
          <li><h5>Professionalism and Wholehearted Service : </h5><p>We provide professional, honest, and wholehearted services to our stakeholders.</p></li>
          <li><h5>Continuous Growth : </h5><p>We constantly strive to enhance our knowledge and skills for personal development.</p></li>
          <li><h5>Team Collaboration and Positive Contribution :</h5><p>We foster teamwork and contribute positively to achieving the organization's vision and mission.</p></li>

        </ul><br>


      </div>
    </div>
  </section>
  
  <section id="section3" class="section">
    <div class="container">
        <h2 class="section-title text-center">History ASR</h2> <br><br>

      <div class="row">
        <div class="col-lg-6">
            <div class="blue-gradient position-relative px-3 py-5 my-1 overflow-auto">
                <div class="timeline-frame">
                  <div class="timeline-contain left">
                    <div class="konten">
                      <div class="h1 font-weight-bold text-info poppins">2022</div>
                      <p>On April 13, 2022, Actual Self Resources officially became PT ACTUAL SELF RESOURCES and was registered as a legal entity. ASR has also registered with several related ministries.</p>
                    </div>
                  </div>
                  <div class="timeline-contain right">
                    <div class="konten">
                      <div class="h1 font-weight-bold text-info poppins">2020</div>
                      <p> Actual Self Resources (ASR) Indonesia was founded as a startup company (Start-Up) based on a digital platform.</p>
                    </div>
                  </div>
                  <div class="timeline-contain left">
                    <div class="konten">
                      <div class="h1 font-weight-bold text-info poppins">2017</div>
                      <p>Started as a youth association for learning, discussion, and self-development.</p>
                    </div>
                  </div>
               
                </div>
            </div>
            
        </div>
        <div class="col-lg-6">
          <p>From 2017, it started with the form of associations for young people to learn, discuss, and practice self-development. Then, it formed communities and organizations with several name changes. In the end, on October 4, 2020, the name Actual Self Resources (ASR) Indonesia was established as a startup company based on a digital platform for Human Resources (HR) self-development services.</p>
          <p>ASR's vision is to create authentic human beings, helping individuals actualize their best potential and achieve a meaningful life. The services provided include consulting, education, and business, specifically targeting the young Generation Z while remaining open to anyone.</p>
          <p>ASR has grown to accommodate thousands of students from various educational backgrounds and regions in Indonesia, as well as from Malaysia and Singapore. ASR consistently strives to guide and train students from schools and colleges, helping them develop and contribute as authentic human beings who make a meaningful impact.</p>
          <p>On April 13, 2022, Actual Self Resources officially became PT ACTUAL SELF RESOURCES and was registered as a legal entity. ASR has also registered with several related ministries.</p>
        </div>
      </div>
    </div>
  </section>
  
   


@endsection