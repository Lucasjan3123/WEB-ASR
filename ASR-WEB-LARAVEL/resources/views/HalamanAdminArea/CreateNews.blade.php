@extends('layoutAdmin.layout')

@section('subtitle')
News / Create
@endsection

@section('content title')
Create News
@endsection
@section('content')

    {{-- form create blog --}}
  <div class="container">
    <div class="card">
      <br><br>

      <form method="POST" action="/AdminArea/news" enctype="multipart/form-data">
        @csrf
    
        <input type="text" hidden  name="users_id" value="{{ Auth::user()->id }}">

        <div class="col-md-6">
          <label  class="form-label">Author</label>
          <input type="text"  readonly name="Author" class="form-control" value="{{ Auth::user()->name }}" >
        </div>
        <div class="col-md-6">
          <label  class="form-label">Date</label>
          <input type="text" class="form-control"  readonly name="Date" value="{{ \Carbon\Carbon::now()->toDateString() }}">
        </div>
        <div class="col-12">
          <label  class="form-label">Title</label>
          <input type="text" class="form-control"name="Title">
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
        </div> <br><br>
        <div class="col-12">
          <div>
            <label for="gambar">Gambar Utama</label>
            <input type="file" id="gambar" name="gambar" accept="image/jpeg,image/jpg,image/png" required>
        </div>
    
        <?php for ($i = 1; $i <= 8; $i++) : ?>
            <div>
                <label for="gambar<?= $i ?>">Gambar Tambahan <?= $i ?></label>
                <input type="file" id="gambar<?= $i ?>" name="gambar<?= $i ?>" accept="image/jpeg,image/jpg,image/png">
            </div>
        <?php endfor; ?>

        </div>
        
        

      


        <div class="col-12">
          <label for="" class="form-label" > Content</label>
          <textarea name="Content" id=""  class="form-control" cols="30" rows="10"></textarea>
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


<script>
  function toggleImageInput() {
  var container = document.getElementById("image-input-container");
  var inputCount = container.getElementsByTagName("input").length;

  if (inputCount < 8) {
    var label = document.createElement("label");
    label.innerHTML = "File Input Gambar";
    label.setAttribute("class", "form-label");

    var input = document.createElement("input");
    input.setAttribute("type", "file");
    input.setAttribute("class", "form-control");
    input.setAttribute("name", "gambar[]");

    var lineBreak = document.createElement("br");

    container.appendChild(label);
    container.appendChild(input);
    container.appendChild(lineBreak);
  }
}

</script>
  @endsection