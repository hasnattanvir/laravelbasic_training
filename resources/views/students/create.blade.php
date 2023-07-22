@extends('layouts.admin')
@section('style')
<style>
    p {
        font-size: 20px;
        color: white;
    }

</style>
@endsection
@section('content')
@include('include.message')

<main>
    <div class="container-fluid vh-100" style="margin-top:300px">
        <div class="" style="margin-top:200px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">Entry Student</h3>
                    </div>
                    <form action="{{route('user.insert')}}" method="post" autocomplete="on" enctype="multipart/form-data">
                        @if (Session::get('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <div class="p-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="{{old('name')}}">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <input type="text" class="form-control" placeholder="Phone" name="phone"
                                    value="{{old('phone')}}">

                            </div>
                            @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror

                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <textarea name="address" placeholder="Address" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror


                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <input type="file" name="image" id="form-control">
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror

                            

                            <button class="btn btn-primary text-center mt-2" type="submit">
                                Insert
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
