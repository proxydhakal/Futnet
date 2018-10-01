<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  
  <script src="/js/postsAjax.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/icons8-f-48.png" type="image/x-icon">
  <head>
    <title>FUTNET</title>
  </head>
  <body style="background-color:#dfe3e6;">
    @include('inc.navbar')
    @yield('content')
    <div class="container-fluid">
      @include('inc.message')
      <div class="row">
        <div class=" col-lg-8 col-md-8">
          
        </div>
        <div class="col-lg-4 col-md-4">
          
        </div>
      </div>
    </div>
    @if(Request::is('/'))
    @include('inc.footer')
    @endif
    @if(Request::is('about'))
    @include('inc.footer')
    @endif
    @if(Request::is('contact'))
    @include('inc.footer')
    @endif
    @if(Request::is('blog'))
    @include('inc.footer')
    @endif
    @if(Request::is('home'))
    @include('inc.footr')
    @endif
    @if(Request::is('register'))
    @include('inc.footr')
    @endif
    @if(Request::is('profile'))
    @include('inc.footr')
    @endif
  </div>
</body>
</html>