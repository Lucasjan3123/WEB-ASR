@extends('layoutAdmin.layout')

@section('subtitle')
Blog / Create
@endsection

@section('content title')
Create Blog
@endsection
@section('content')

    {{-- form create blog --}}
  <div class="container">
    <div class="card">
      <br><br>
      <form action="/AdminArea/blog" class="row g-3"method="POST" enctype="multipart/form-data" style="margin-left: 50px; margin-right:50px;" >
        @csrf

        <input type="text" hidden  name="users_id" value="{{ Auth::user()->id }}">
        <div class="col-md-12">
          <label  class="form-label">Author</label>
          <input type="text"  readonly name="nama" class="form-control" value="{{ Auth::user()->name }}" >
        </div>
        
        <div class="col-12">
          <label  class="form-label">Title</label>
          <input type="text" class="form-control"name="title">
        </div>
        <div class="col-12">
          <label class="form-label">Kategori</label>
          <select name="_kategori_id" class="form-select" id="" >
    
            <option value="" selected>....Pilih Kategori....</option>
            @forelse ($kategori as $item)
            <option value="{{ $item->id }}">{{ $item ->nama }}</option>
                
            @empty
                <option value="">Tidak ada kategori lain </option>
            @endforelse
    
          </select>
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag1</label>
          <input type="text" class="form-control" name="tag1">
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag2</label>
          <input type="text" class="form-control" name="tag2">
            
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag3</label>
          <input type="text" class="form-control" name="tag3">
        </div>
        <div class="col-12">
          <label  class="form-label">File Input Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>

        <div class="col-12">
          <label for="" class="form-label" > Content</label>
          <textarea name="content" id=""  class="form-control" cols="30" rows="10"></textarea>
        </div>

        
        <br><br><br>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a type="button" href="/AdminArea/blog" class="btn btn-primary">back</a>
        </div>
      </form>
      <br><br><br>
    </div>
  </div>
  
 

    @if ($errors->any())
   <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif



  @endsection