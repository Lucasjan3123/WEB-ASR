@extends('layoutAdmin.layout')

@section('subtitle')
List User
@endsection

@section('content title')
list User
@endsection
@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Table User</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-striped " style="border: 2px solid black;">
        <thead class= "table table-primary bg-primary "style="border: 2px solid black;">
        <tr  style="border: 2px solid black;" >
          <td scope="col" style="color:black" >#</td>
          <td scope="col" style="color:black" >Name</td>
          <td scope="col" style="color:black">Email </td>
          <td scope="col" style="color:black">action</td>
  
  
        </tr>
        </thead>
        <tbody  class= "table table-light bg-light" style="border: 2px solid black;">
          @forelse ($users as $key=>$value)
              <tr class= "table table-light bg-light" style="border: 2px solid black;">
                  <td scope="col" style="border: 2px solid black;">{{$key + 1}}</td>
                  <td scope="col" style="border: 2px solid black;">{{$value->name}}</td>
                  <td scope="col" style="border: 2px solid black;">{{$value->email}}</td>
              </tr>
          @empty
              <tr colspan="3">
                  <td>No data</td>
              </tr>  
          @endforelse   
        <tfoot class= "table table-primary " style="border: 2px solid black;">
        <tr style="border: 2px solid black;">
          <th ></th>
          <th>name</th>
          <th>email</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection