<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if (Session::get('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        <form action="{{route('sub.insert')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Sub Name</label>
                <br>
                <input type="text" name="subname" class="form-control">
                <br>
                @error('subname')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <br>
                <label for="">Sub Code</label>
                <br>
                <input type="text" name="subcode" class="form-control">
                <br>
                @error('subcode')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="">Sub Crated</label>
                <br>
                <input type="text" name="subctd" class="form-control">
                <br>
                @error('cubctd')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <br>
                <input type="submit" value="Add Subject">
            </div>
        </form>
    </div>
</body>
</html>