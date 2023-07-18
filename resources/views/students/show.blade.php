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
      </tr>
    </thead>
    <tbody>
     
      <tr class="">
        <td>{{$stdata->name}}</td>
        <td>{{$stdata->phone}}</td>
        <td>{{$stdata->address}}</td>
      </tr>

      
      
    </tbody>
  </table>
</div>


@endsection