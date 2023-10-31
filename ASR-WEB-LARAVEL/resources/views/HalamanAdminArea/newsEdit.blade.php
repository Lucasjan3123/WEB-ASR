@extends('layoutAdmin.layout')

@section('subtitle')
News / Edit
@endsection

@section('content title')
Edit News
@endsection
@section('content')

   {{-- form create blog --}}
   <div class="container">
    <div class="card">
      <br><br>
      <form action="/AdminArea/news/{{ $news->id }}" class="row g-3"method="POST" enctype="multipart/form-data" style="margin-left: 50px; margin-right:50px;" >
        @csrf
        @method('put')
        <div class="col-md-6">
        <input type="text" hidden  name="users_id" value="{{ Auth::user()->id }}">
          <label  class="form-label">Author</label>
          <input type="text"  name="Author" readonly class="form-control" value="{{ $news->Author}}" >
        </div>
        <div class="col-md-6">
          <label  class="form-label">Date</label>
          <input type="text" class="form-control"  readonly name="Date" value="{{ \Carbon\Carbon::now()->toDateString() }}">
        </div>
        <div class="col-12">
          <label  class="form-label">Title</label>
          <input type="text" class="form-control"name="Title"  value="{{ $news->Title }}">
        </div>
        
        <div class="col-md-4">
          <label  class="form-label">Tag1</label>
          <input type="text" class="form-control" name="tag1" value="{{ $news->tag1 }}">
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag2</label>
          <input type="text" class="form-control" name="tag2" value="{{ $news->tag2 }}" >
            
        </div>
        <div class="col-md-4">
          <label  class="form-label">Tag3</label>
          <input type="text" class="form-control" name="tag3" value="{{ $news->tag3 }}">
        </div>

        
        <div class="col-12">
          <div class="form-group">
            <label for="photo">foto</label> <br>
            @if($news->gambar)
                <img src="{{ asset('image/' . $news->gambar) }}" width="200px">
                <br><br>
            @endif
            <div class="input-group">
                <input type="text" name="gambars" class="form-control" id="photo" value="{{ $news->gambar }}" readonly>
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary" onclick="document.getElementById('new_photo').click()">Browse</button>
                </div>
            </div>
            <small class="form-text text-muted">Leave it empty if you don't want to change the photo.</small>
            <input type="file" name="gambar" id="new_photo" style="display: none;">
    
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div>
                    <label for="gambar<?= $i ?>">Gambar Tambahan <?= $i ?></label>
                    <input type="file" id="gambar<?= $i ?>" name="gambar<?= $i ?>" accept="image/jpeg,image/jpg,image/png">
                </div>
            <?php endfor; ?>
        </div>
        </div>
        
        

        <div class="col-12">
          <label for="" class="form-label" > Content</label>
          <textarea name="Content" id=""  class="form-control" cols="30" rows="10" >{{ $news->Content }}</textarea>
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