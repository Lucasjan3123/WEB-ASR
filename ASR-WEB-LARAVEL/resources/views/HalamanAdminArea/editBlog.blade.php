@extends('layoutAdmin.layout')

@section('subtitle')
Blog / Edit
@endsection

@section('content title')
Edit Blog
@endsection
@section('content')

   {{-- form create blog --}}
   <div class="container">
    <div class="card">
      <br><br>
      <form action="/AdminArea/blog/{{ $blog->id }}" class="row g-3"method="POST" enctype="multipart/form-data" style="margin-left: 50px; margin-right:50px;" >
        @csrf
        @method('put')
        <input type="text" hidden  name="users_id" value="{{ Auth::user()->id }}">

        <div class="col-md-6">
          <label  class="form-label">Author</label>
          <input type="text"  name="nama" readonly class="form-control" value="{{ $blog->nama}}" >
          @error('nama')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-md-6">
          <label  class="form-label">Date</label>
          <input type="text" class="form-control"  readonly name="date" value="{{ \Carbon\Carbon::now()->toDateString() }}">
          @error('date')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-12">
          <label  class="form-label">Title</label>
          <input type="text" class="form-control"name="title"  value="{{ $blog->title }}">
          @error('title')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-12">
          <label class="form-label">Kategori</label>
          <select name="_kategori_id" class="form-select" id="" >
            @forelse ($kategori as $item)
            <option value="{{ $item->id }}"{{ $item->id == $blog->_kategori_id ? 'selected' : '' }}>{{ $item ->nama }}</option>
                
            @empty
                <option value="">Tidak ada kategori lain </option>
            @endforelse
    
          </select>
          @error('_kategori_id')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
  
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag1</label>
          <input type="text" class="form-control" name="tag1" value="{{ $blog->tag1 }}">
          @error('tag1')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
  
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag2</label>
          <input type="text" class="form-control" name="tag2" value="{{ $blog->tag2 }}" >
          @error('tag2')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
  
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag3</label>
          <input type="text" class="form-control" name="tag3" value="{{ $blog->tag3 }}">
          @error('tag3')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
  
        </div>

        
        <div class="col-12">
          <div class="form-group">
            <label for="photo">foto</label> <br>
            @if($blog->gambar)
                <img src="{{ asset('image/' . $blog->gambar) }}" width="200px">
                <br><br>
            @endif
            <div class="input-group">
                <input type="text" name="gambars" class="form-control" id="photo" value="{{ $blog->gambar }}" readonly>
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary" onclick="document.getElementById('new_photo').click()">Browse</button>
                </div>
            </div>
            
            <small class="form-text text-muted">Leave it empty if you don't want to change the photo.</small>
            <input type="file" name="gambar" id="new_photo" style="display: none;">
            @error('gambar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        </div>
        
        

        <div class="col-12">
          <label for="" class="form-label" > Content</label>
          <textarea name="content" id=""  class="form-control" cols="30" rows="10" >{{ $blog->content }}</textarea>
          @error('content')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
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
        <br><br><br>
      </form>
      
    </div>
  </div>
  
  <script>
    document.getElementById('new_photo').addEventListener('change', function() {
        var photoInput = document.getElementById('photo');
        photoInput.value = this.value.split('\\').pop();
    });
</script>

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