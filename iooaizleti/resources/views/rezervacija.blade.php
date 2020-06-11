  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Izleti</title>
      <!-- Scripts -->
      <style>
          .btn-info{
              color: #fff;
          }
      </style>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      @yield('css')
  </head>
  @extends('index')
@section('content')

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>TURISTIČKI IZLETI BRODICAMA</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Alegreya:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />
  <style>
a:link, a:visited {
  background-color: #495057;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <a style="margin-top:10px; margin-left:10px; background-color:silver; border-color:silver;" class="btn btn-secondary" href="{{ url('/cms/index') }}">
    Povratak na prthodnu stranicu.
  </a>
  @isset($rezervacija)
  <div class="alert alert-success" role="alert" style="width: 500px; margin-left:500px; margin-top:80px;">
    <h4 class="alert-heading">Uspješna rezervacija!</h4>
    <a>Uspješno ste rezervirali putovanje. Podatci o putovanju su u nastavku:</a>
  </div>
  @endisset

  @isset($status)
    {{$status}}
  @endisset

  @isset($rezervacija)
<table class="table"style="margin-top:60px; width:1400px; margin-left:70px;">
    <thead class="thead-dark">
      
      <tr>
        
        <th scope="col">Vaše ime</th>
        <th scope="col">Vaše prezime</th>
        <th scope="col">Naziv broda</th>
        <th scope="col">Naziv rute</th>
        <th scope="col">Cijena (za jednu osobu) u EUR</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
     
      <tr style="background-color:white; opacity: 0.8">
        <th scope="row">{{ $rezervacija->gost->imeUser }}</th> <th scope="row">{{ $rezervacija->gost->prezimeUser }}</th>
        <th scope="row">{{ $rezervacija->putovanje->brod->nazivBrod }}</th>  <th scope="row">{{ $rezervacija->putovanje->ruta->nazivRuta }}</th> 
        <th scope="row">{{ $rezervacija->cijenaGosta }}</th>     
       
     </tr>
              

    </tbody>      

  </table>
  @endisset
</body>




@endsection