<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}"/>
   
    <title>@yield('title')</title>
</head>
<body>

<div class="container-fluid banner">
    <div class="row">
        <div class="col-lg-12">
        Banner
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">mysite.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">contact</a>
      </li>
     
    </ul>
  </div>
</nav>
        </div>
    </div>
    </div><!-- Container close-->
    <div class="container maincontent">
    @yield('maincontent')
   
    </div><!-- Container-->
    <div class="container-fluid footer">

    <div class="row">
        <div class="col-lg-12">
        Copyright
        </div>
    </div>

</div><!--Container Close-->
    
</body>
</html>