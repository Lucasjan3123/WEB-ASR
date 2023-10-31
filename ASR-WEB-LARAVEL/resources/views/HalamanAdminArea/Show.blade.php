@extends('layoutAdmin.layout')

@section('subtitle')
Blog
@endsection

@section('content title')
<a class="navbar-brand" href="/AdminArea/news" >  <i class="uk-icon-button"  uk-icon="icon :arrow-left; ratio:2;"> </i> &ensp;
  Blog
@endsection
@section('content')
<style>

@media screen and (min-width: 1200px){
  #style{
    width: 900px ;
    
  }
}
</style>
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">
            
            <div class="entry-img" >
              <img src="{{ asset('image/' .$blog ->gambar) }}" alt="" id="style" class="img-fluid" >
              <br><br><br>
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">{{ $blog->title }}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $blog->nama }}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html">{{ $blog->created_at->format('d F Y') }}</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p style="line-height: 1.5; margin-bottom: 10px; text-align: justify;">{!! nl2br(e($blog->content)) !!}</p>


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
            <img src="{{ asset('image/' .Auth::user()->foto) }}" class="rounded-circle float-left" alt="">
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

          
        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                @forelse ($kategori as $item)
                <li><a href="#">{{ $item->nama }} </a></li>
                    
                @empty
                    <h3>no other category</h3>
                @endforelse
                
              </ul>
            </div><!-- End sidebar categories-->

            
            {{-- <h3 class="sidebar-title">Related Posts</h3>
            <div class="sidebar-item recent-posts">
              @forelse ($relatedBlogs as $relatedBlog)
              <div class="post-item clearfix">
                <img src="{{ asset('image/' . $relatedBlog->gambar) }}" alt="">
                <h4><a href="/AdminArea/blog/{{ $relatedBlog->id }}" >{{ $relatedBlog->title }}</a></h4>
                <time >{{ $relatedBlog->date }}</time>
              </div>
                  
              @empty
              <h3>no other Blog</h3>    
              @endforelse
              

             
            </div><!-- End sidebar recent posts--> --}}

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                @forelse ($tag as $item)
                    
                <li><a href="#">{{ $item->name }}</a></li>
                @empty
                    
                @endforelse
          
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->
@endsection