<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light">
  <div class="nav-container">
    <img src="{{ asset('images/logo.png') }}" height="75">
    <h1>International Electronics and Technological Institute</h1>
  </div>
</nav>
<div class="container-body">
    <div class="container-form-login">
        <h2 class="title-form">Login</h2>
        <form action="/information" method="POST">
            @csrf
            <div class="mb-3">
                <label>LRN</label>
                <input type="text" class="form-control" name="lrn" value="{{old('lrn')}}" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" value="{{old('pass')}}" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success form-control" name="submit">Login</button>
            </div>
        </form>
        <p class="form-nav">Don't have an account? <a href="/registration">Register Now</a></p>
    </div>
</div>
</body>
</html>