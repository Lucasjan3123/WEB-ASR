@extends('layoutAdmin.layout')


@section("subtitle")
Category & Tag
@endsection

@section('content title')
Category & Tag
@endsection


@section('content')

<div class="container text-center">

  <h1>  Category</h1>
    <!-- Button trigger modal -->
    <button style="float:right" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create Category
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/AdminArea/kategori" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name Category</label>
                        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" >
                        @error('nama')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                
                      </div>
                      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <br><br><br><br><br><br>
        
      {{-- @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
      @endif --}}
      <div class="row">

        @foreach ($kategori as $item)
        <div class="col-4">
          <div class="card">
              <div class="card-body">
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                {{-- <a href="">{{ $item->id }}</a> --}}
                <span style="margin-left: 10px">{{ $item->nama }}</span>
                
  
                <a  href="" style="margin-left:40px" class="uk-icon-button" uk-icon="pencil" data-bs-toggle="modal" data-bs-target="#editModal{{  $item->id }}">
                </a>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="editModal{{  $item->id }}" aria-hidden="true" aria-labelledby="editModal{{  $item->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="editModal{{  $item->id }}">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('kategori.updated', $item->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="modal-body">
                                <h3>Edit Category</h3> <br>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Name Category</label>
                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" >
                                    @error('nama')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            
                                  </div>
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
  
                  <a  href="#" class="uk-icon-button" uk-icon="close" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                  </a>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"   aria-labelledby="deleteModal{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="deleteModal{{ $item->id }}">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('kategori.delete', $item->id) }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                @csrf
                                @method('delete')
                                <h4> Confirm deletion ?</h4>
                                {{-- <input type="hidden" name="kategory_id" value="{{ $item->id }}">   --}}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Hapus</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                
  
              </div>
            </div>
        </div>
        
      
        @endforeach
      
      </div>

      <div style="border-top:  2px solid black" >

        <br><br><br>
          <h1>Tag</h1>
                   <!-- Button trigger modal -->
        <button style="float:right" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTag">
          Create Tag
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalTag" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel1">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/AdminArea/tag" method="POST">
                  @csrf
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="exampleFormControlInput2" class="form-label">Name tag</label>
                          <input type="text" class="form-control" name="name" id="exampleFormControlInput2" >
                          @error('name')
                          <div class="alert alert-danger">
                              {{ $message }}
                          </div>
                          @enderror
                  
                        </div>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
    
        <br><br><br><br><br><br>
          
        {{-- @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
    
        @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif --}}
        <div class="row">
    
          @foreach ($tag as $item)
          <div class="col-4">
            <div class="card">
                <div class="card-body">
                  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                  {{-- <a href="">{{ $item->id }}</a> --}}
                  <span style="margin-left: 10px">{{ $item->name }}</span>
                  
    
                  <a  href="" style="margin-left:40px" class="uk-icon-button" uk-icon="pencil" data-bs-toggle="modal" data-bs-target="#edittagModal{{  $item->id }}">
                  </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="edittagModal{{  $item->id }}" aria-hidden="true" aria-labelledby="edittagModal{{  $item->id }}" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="edittagModal{{  $item->id }}">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{ route('tag.updated', $item->id) }}" method="POST">
                              @csrf
                              @method('put')
                              <div class="modal-body">
                                  <h3>Edit Tag</h3> <br>
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label"> Name Tag</label>
                                      <input type="text" class="form-control" name="name" id="exampleFormControlInput1" >
                                      @error('name')
                                      <div class="alert alert-danger">
                                          {{ $message }}
                                      </div>
                                      @enderror
                              
                                    </div>
                                    
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
    
                    <a  href="#" class="uk-icon-button" uk-icon="close" data-bs-toggle="modal" data-bs-target="#deletetagModal{{ $item->id }}">
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="deletetagModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"   aria-labelledby="deletetagModal{{ $item->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deletetagModal{{ $item->id }}">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{ route('tag.delete', $item->id) }}" method="POST">
                              @csrf
                              <div class="modal-body">
                                  @csrf
                                  @method('delete')
                                  <h4> Confirm deletion ?</h4>
                                  {{-- <input type="hidden" name="kategory_id" value="{{ $item->id }}">   --}}
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Hapus</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  
    
                </div>
              </div>
          </div>
          
        
          @endforeach
        
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

      
</div>

@endsection