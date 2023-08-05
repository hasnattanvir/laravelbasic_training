@extends('layouts.admin')
@section('content')

<?php

// use Illuminate\Support\Facades\DB;

// $stdata = DB::table('students')->get();


?>

<div class="table-responsive">
  <table class="table table-primary">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Subject</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
     
      @foreach ($stdata as $item)
      <tr class="">
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>

        <td>{{$item->Subject->SubName}}</td>

        <td><img src="{{asset('storage/studentsphoto/')}}/{{$item->image}}" alt="photo" width="100px"></td>
        <td>
          <a href="" class="btn btn-success">Edit</a>
          <form action="/datadelete/{{$item->id}}" method="POST">
            @method('DELETE')
            @csrf 
            <button class="btn btn-danger" >Delete</button>
          </form>
        </td>
      </tr>
      @endforeach


      
      
    </tbody>
  </table>
</div>


@endsection