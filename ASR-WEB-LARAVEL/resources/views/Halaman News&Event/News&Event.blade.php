@extends('layout.layout')

@section('content')

<style>
  .navbar-1-2.navbar-light .navbar-nav .nav-link {
    color: #092a33;
    transition: 0.3s;
  }

  .navbar-1-2.navbar-light .navbar-nav .nav-link.active {
    font-weight: 500;
  }

  .navbar-1-2 .btn-get-started {
    border-radius: 20px;
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

  /* Media Query for screens with maximum width 900px */
  @media (max-width: 900px) {
    .navbar-1-2 .navbar-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }

    .navbar-1-2 .navbar-nav .nav-item {
      margin-right: 10px;
    }

    .navbar-1-2 .navbar-nav .nav-link {
      padding: 5px 10px;
    }

    .navbar-1-2 .navbar-form {
      margin-top: 10px;
    }
  }

  /* Style untuk search bar */
  .search-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-top: 10px;
  }

  .search-input {
    width: 200px;
    height: 43px;
    padding: 5px;
    border: none;
    border-radius: 3px;
    font-size: 14px;
  }

  .search-button {
    margin-left: 5px;
    padding: 5px 10px;
    margin-bottom: 20px;
    background-color: #fcd396;
    border: none;
    border-radius: 3px;
    font-size: 18px;
    cursor: pointer;
  }
</style>

<nav class="navbar-1-2 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body-tertiary"
  style="font-family: Poppins, sans-serif">
  <div class="container">
    <ul class="navbar-nav">
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
    <div class="search-container">
      <input type="text" class="search-input" placeholder="Search...">
      <button class="search-button">Search</button>
    </div>
  </div>
</nav>


<div class="container text-center">
<hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">Headline News</h4>
  </div>
<hr>
  <br>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="max-width: 400px; margin: 0 auto;">
    <div class="carousel-inner">
      @php
        $latestNews = $news->sortByDesc('created_at')->take(3);
      @endphp
      @foreach ($latestNews as $key => $news1)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
          <a href="/News&Event/Shownews/{{ $news1->id }}" style="text-decoration: none;">
            <img src="{{ asset('image/' . $news1->gambar) }}" class="d-block w-100" alt="News Image">
            <div class="carousel-caption">
              <h5 style="font-size: 14px;">{{ $news1->Title }}</h5>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container text-center">
  <hr>

  <div class="row column">
    <h4 style="margin: 0;" class="text-center">Event & Activities</h4>
  </div>

  <hr>

  <div class="row">
    @forelse ($news as $item)
    <div class="col-6 col-md-4 col-lg-3 mb-4">
      <div class="card">
        <img src="{{ asset('image/' .$item->gambar) }}" class="card-img-top" alt="image for article" style="width: 100%; height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 18px; line-height: 22px; height: 44px; overflow: hidden; text-overflow: ellipsis;">{{ $item->Title }}</h5>
          <p class="card-text" style="font-size: 14px; line-height: 18px; height: 36px; overflow: hidden; text-overflow: ellipsis;">By {{ $item->Author }}</p>
          <p class="card-text" style="font-size: 14px; line-height: 18px; height: 36px; overflow: hidden; text-overflow: ellipsis;">{{ $item->Date }}</p>
          <a href="/News&Event/Shownews/{{ $item->id }}" class="btn btn-primary" style="font-size: 14px;">Go somewhere</a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>
  <br><br>
  <div class="d-flex justify-content-center">
    <a class="btn btn-primary"href="/News&Event/Event&Activities">
      Learn more
    </a>
  </div>
</div>
 
<div class="container text-center">
  <hr>

  <div class="row column">
    <h4 style="margin: 0;" class="text-center">Latest Blog</h4>
  </div>

  <hr>

  <div class="row">
    <div class="large-8 columns col-8" style="border-right: 1px solid #E3E5E8;">
      @if ($blog)
          
      @forelse ($blog as $item)
      <article>
        <div class="row">
          <div class="large-6 columns col-6">
            <p><img src="{{ asset('image/' .$item->gambar) }}" alt="image for article" alt="article preview image" style="width: 100%; height: auto;"></p>
          </div>
          <div class="large-6 columns col-6">
            <h5 style="font-size: 18px; line-height: 22px; height: 44px; overflow: hidden; text-overflow: ellipsis;"><a >{{ $item->title }}</a></h5>
            <p style="font-size: 14px; line-height: 18px; height: 36px; overflow: hidden; text-overflow: ellipsis;"><i class="fi-torso"></i> By {{ $item->nama }}</p>
            <p style="font-size: 14px; line-height: 18px; height: 36px; overflow: hidden; text-overflow: ellipsis;"><i class="fi-calendar"></i> {{ $item->date }}</p>
            <p style="font-size: 14px;">{{ Str::limit($item->content, 100) }}</p>
            <a href="{{ route('show.blog', ['id' => $item->id, 'slug' => Str::slug($item->title)]) }}" class="btn btn-primary" style="justify-content: center; margin-left: 0;">Learn more</a>
          </div>
        </div>
        <hr>
      </article>
      @empty
      @endforelse
      
      @endif
      <br>
      <div class="row">
        <a href="/News&Event/blog" class="btn btn-primary" style="justify-content: center;">Learn more</a>
      </div>

    </div>

    <div class="large-4 columns col-4">
      <div class="text-center">
        <p class="lead text-start" style="font-weight: 500; font-size: 20px;">Follow Social Media</p>
        <hr>
        <br>
        <div class="row">
          <div class="col-12">
            <div class="d-flex flex-column align-items-start">
              <i class="text-start" uk-icon="instagram" style="width: 30rem"></i>
              <h6 class="text-start">asresourcesindonesia</h6>
              <a href="https://www.instagram.com/asresourcesindonesia/" style="color: black" class="text-start"><small>FOLLOW</small></a>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex flex-column align-items-start">
              <i class="text-start" uk-icon="tiktok" style="width: 30rem"></i>
              <h6 class="text-start">asresourcesindonesia</h6>
              <a href="https://www.tiktok.com/@asresourcesindonesia" style="color: black" class="text-start"><small>FOLLOW</small></a>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex flex-column align-items-start">
              <i class="text-start" uk-icon="twitter" style="width: 30rem"></i>
              <h6 class="text-start">asresources_id</h6>
              <a href="https://twitter.com/asresources_id?" style="color: black" class="text-start"><small>FOLLOW</small></a>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex flex-column align-items-start">
              <i class="text-start" uk-icon="youtube" style="width: 30rem"></i>
              <h6 class="text-start">Actual Self Resources</h6>
              <a href="https://www.youtube.com/channel/UCrDJB07grAlFpZxe2_tAlQg" style="color: black" class="text-start"><small>FOLLOW</small></a>
            </div>
          </div>
        </div>
        <br>
      </div>

      <div class="text-center">
        <hr>
        <p class="lead text-start" style="font-weight: 500; font-size: 20px;">TRENDING POSTS</p>
        <hr>
        <h3>Not Other Blog</h3>
        <!-- Konten trending posts -->
      </div>
    </div>
  </div>
</div>
  <br><br>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  @endsection