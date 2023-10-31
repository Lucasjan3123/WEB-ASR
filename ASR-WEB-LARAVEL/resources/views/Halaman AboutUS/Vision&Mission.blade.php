
@extends('layout.layout')


@section('content')

<style>
    #vision-mission {
        background-size: cover;
        background-position:center;
        padding: 50px 0;
        color: #fff;
  background: rgba(0,0,0,0.7) url("https://content.gallup.com/origin/gallupinc/GallupSpaces/Production/Cms/CSFCMSEN/4jwkequnrueuc3zsuky8jw.jpg");
 background-blend-mode:darken;
}

#vision-mission h2 {
  color: #fff;
  align-items: center
}

#vision-mission p,
#vision-mission ol {
  margin-bottom: 20px;
  font-size: 24px; /* Ubah ukuran font sesuai preferensi Anda */
  /* list-style: none; */
}

.mission-item {
  border-radius: 50px;
  background-color: #fff;
  color: #fff;
  padding: 10px 20px;
  font-family: 'Arial', sans-serif; /* Ganti dengan font family yang Anda inginkan */
  font-size: 20px; /* Ganti dengan ukuran font yang Anda inginkan */
}

.fade-in {
  opacity: 0; /* Membuat elemen awalnya transparan */
  animation: fadeAnimation 1s ease-in-out forwards; /* Animasi fade-in selama 1 detik */
}

.animated-text {
  animation: textAnimation 1s ease-in-out forwards; /* Animasi fade-in selama 1 detik */
}

@keyframes fadeAnimation {
  0% {
    opacity: 0;
    transform: translateY(20px); /* Menggeser elemen 20px ke bawah */
  }
  100% {
    opacity: 1;
    transform: translateY(0); /* Mengembalikan elemen ke posisi awal */
  }
}

@keyframes textAnimation {
  0% {
    opacity: 0;
    transform: translateX(-20px); /* Menggeser teks 20px ke kiri */
  }
  100% {
    opacity: 1;
    transform: translateX(0); /* Mengembalikan teks ke posisi awal */
  }
}




.black{
    color: black;
}

@media (max-width: 767px) {
  #vision-mission .row {
    flex-direction: column;
  }
}

</style>
<section id="vision-mission">
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="vision fade-in">
            <h2 class="animated-text">Vision ASR</h2> <br>
            <p>To empower the younger generation to awaken their unconsciousness, embrace their authentic selves, actualize their potential, and achieve a meaningful life.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mission fade-in">
            <h2 class="animated-text" >Mission ASR</h2><br>
            <ol>
              <li class="mission-item" ><a href="" class="black"> <br> Provide information and education through social media platforms on self-development, mental health, soft skills, and related topics. <br><br>     </a>   </li><br>
              <li class="mission-item" ><a href="" class="black"> <br>Deliver business services including academy, ambassador programs, career consulting, creativity support, societal engagement, and an online store. <br> <br></a>           </li><br>
              <li class="mission-item"><a href=""class="black"> <br> Foster relationships and enhance collaborations to expand networks. <br><br> </a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
  </section>
  
  
  
  
@endsection