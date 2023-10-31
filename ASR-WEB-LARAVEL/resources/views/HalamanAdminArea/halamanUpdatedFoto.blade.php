@extends('layoutAdmin.layout')

@section('subtitle')
Blog
@endsection

@section('content title')
Blog
@endsection
@section('content')

<style>
    /* #circle {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background-color: #fff;
    border: 2px solid #ccc;
    margin: 0 auto;
    margin-top: 20px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
  } */
  
  .drop{
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    z-index: -1;
  }
    .drop + #drop-area {
    border: 2px dashed #ccc;
    border-radius: 20px;
    /* padding: 20px; */
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    
  }
  
  #drop-area.highlight {
    border-color: purple;
  }
  
  .my-form {
    margin-bottom: 10px;
    text-align: center;
  }
  
  .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ccc;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
  }
  
  #gallery {
      width: 210px;
    height: 210px;
    border-radius: 50%;
    background-color: #fff;
    border: 2px solid #ccc;
    margin: 0 auto;
    margin-top: 20px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
  
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
  }
  
  #gallery img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    margin: 0 auto;
  
    border-radius: 50%;
    /* border: 2px solid #ccc; */
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
  
  }
   
  </style>


<div id="drop-area">
    <div id="gallery"  ></div><br>
    <form action="/addfoto/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" class="my-form">
      @csrf
      @method('put')
      <input type="file" name="foto" class="drop" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
      <label class="button" for="fileElem">Choose file</label>
      <br><br>
      <button  class="btn btn-success"  style="align-items: center"> Submit</button>
      
    </form>
    @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
    @endif
    {{-- <progress id="progress-bar"  max=100 value=0 ></progress> --}}
  
  </div>
<script>
  // Mencegah default event untuk semua event drag and drop
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false);
  document.body.addEventListener(eventName, preventDefaults, false);
});

// Menambahkan class 'highlight' pada drop area ketika item di-drag di atasnya
['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false);
});

// Menghapus class 'highlight' pada drop area ketika item di-drop atau di-drag meninggalkan area
['dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, unhighlight, false);
});

// Menangani event drop pada drop area
dropArea.addEventListener('drop', handleDrop, false);

function preventDefaults (e) {
  e.preventDefault();
  e.stopPropagation();
}

function highlight(e) {
  dropArea.classList.add('highlight');
}

function unhighlight(e) {
  dropArea.classList.remove('highlight');
}

function handleDrop(e) {
  var dt = e.dataTransfer;
  var files = dt.files;

  handleFiles(files);
}

function handleFiles(files) {
  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    if (file.type.match('image.*')) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var img = document.createElement('img');
        img.src = e.target.result;
        document.getElementById('gallery').appendChild(img);
      }
      reader.readAsDataURL(file);
    }
  }
}

</script>
@endsection