@extends('layoutAdmin.layout')

@section('subtitle')
Blog
@endsection

@section('content title')
Blog
@endsection
@section('content')

<style>
  ul#text {
    padding: 0;
}

ul#text li {
    display: inline;
}

ul#text li a {
    /* background-color: green; */
    /* color: white; */
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

</style>
<div class="container">
    <div class="text-end upgrade-btn" style="float: right">
        <a href='/AdminArea/blog/create' class="btn btn-primary text-white"
            target="_blank">Create</a>
    </div>

  </div>
  <br><br><br><br>
  @forelse ($blog as $item)
<div class="container">

  
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
      
        <div class="card" style="width: 35rem;">
          <img src="{{ asset('image/' .$item ->gambar) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
              <ul id="text">
                <li>
                  
                  <i class="bi bi-person"></i> <a href="blog-single.html">{{ $item->nama }}</a>
                </li>
                <li>
    
                  <i class="bi bi-clock"></i> <a href="blog-single.html">{{ $item->created_at->format('d F Y') }}</a>
                </li>
                <li>
    
                  {{-- <i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a> --}}
                </li>
              </ul>
            <p class="card-text" contenteditable="true"  style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" >{{ $item->content }}</p> <br>
            <a href="/AdminArea/blog/{{ $item->id }}" class="btn btn-primary" style="float: right">Read More</a>
          </div>
          <div class="d-flex border-top">
            <small class="w-50 text-center border-end py-2">
                 <a  href='/AdminArea/blog/{{ $item->id }}/edit'class="btn btn-outline-warning border-2" >Edit </a>
            </small>
            <small class="w-50 text-center py-2">
                <form action="/AdminArea/blog/{{ $item->id }}" method="POST">
                    @csrf
                    @method('delete')
                  <input type="submit" value="Delete " class="btn btn-outline-danger border-2 " > 
                    </form>
            </small>
        </div>
        </div>
      
      </div>
    </div>
  </div>
</div>
  
  
    
@empty
    
@endforelse


  </article><!-- End blog entry -->


@endsection