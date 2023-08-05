<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card p-3">
            
            @if (Session('success'))
                <div class="alert alert-success">
                    {{Session('success')}}
                </div>
            @endif
            @if (Session('fail'))
                <div class="alert alert-danger">
                    {{Session('fail')}}
                </div>
            @endif

            <form action="{{route('user.create')}}" method="post">
                @csrf
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
                <br>
                @error('name')
                    <span>{{$message}}</span>
                @enderror
                <br>
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone">
                <br>
                @error('name')
                    <span>{{$message}}</span>
                @enderror
                <br>
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
                <br>
                @error('email')
                    <span>{{$message}}</span>
                @enderror
                <br>
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
                <br>
                @error('password')
                    <span>{{$message}}</span>
                @enderror
                <br>
                <label for="">RePassword</label>
                <input type="password" class="form-control" name="repassword">
                <br>
                @error('repassword')
                    <span>{{$message}}</span>
                @enderror
                <br>
                <button type="submit" class="btn btn-success">login</button>
            </form>
        <a href="{{route('user.login')}}">I Have an account</a>

        </div>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>