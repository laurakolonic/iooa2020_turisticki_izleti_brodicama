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

@extends('index')
@section('content')


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Alegreya:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
<style>

a:link, a:visited {
background-color: background-color: #495057;
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



    
    <div class="content">
      
    @if (Route::has('login'))
        <div class="top-right links" style="margin-top: 10px; margin-left:5px;">
            @auth
                @if(Auth::user()->admin == 1)
                <a style="color:white; background-color:silver;" href="{{ url('/cms/index') }}">Admin verzija</a>
                <a style="font-weight:lighter;color:white; background-color:silver; font-size:1vw;" href="{{ url('/logout') }}">Odjavi se</a>
                @else
                <a style="font-weight:lighter;color:white; background-color:silver;font-size:1vw;" href="{{ url('/logout') }}">Odjavi se</a>
                @endif
            @else
                <a style="font-weight:lighter;color:white; background-color:silver;font-size:1vw;"href="{{ route('login') }}">Prijavi se</a>

                @if (Route::has('register'))
                    <a style="font-weight:lighter;color:white; background-color:silver; font-size:1vw;"href="{{ route('register') }}">Registraj se</a>
                @endif
            @endauth
            
        </div>
    @endif
      
    </div>
</div>
<form action="{{ route('pregledputovanja.pregled') }}" style="margin-left:600px;">

   <div class="card card-default" style="opacity: 0.8; width:300px; ">
    <div class="card-header" style="width:300px;">DATUM</div>
   <div class="form-group">
   
    <input type="date" min="2020-06-01" max="2021-10-20" id="datum" class="form-control" name="datum" value="Unesi datum" style="width: 300px;">
    <button class="btn btn-success" style="margin-left:100px; width: 100px; background-color:silver; border-color: silver; margin-top:5px;"> Traži </button></div>
</div> </div> 
    


</form>






<div class="d-flex justify-content-end mb-2" style="width: 730px;">
</div>
<div class="card card-default" style="opacity: 0.8">        
   

<div class="card-header">PUTOVANJA</div>
<div class="card-body" >
    <table class="table">
        <thead>
            <th>Datum</th>
            <th>Vrijeme</th>
            <th>Brod</th>
            <th>Brod slika</th>
            <th>Ruta</th>
            <th>Ruta slika</th>
            <th>Cijena</th>
            <th></th>
        </thead>

        <tbody>
            @foreach($putovanja as $putovanje)
                <tr>
                    <td>
                        {{ $putovanje->datum }}
                    </td>
                    <td>
                        {{ $putovanje->vrijeme }}
                    </td>
                    <td>
                        {{ $putovanje->brod->nazivBrod }}
                    </td>
                   
                        <th>
                            <img src="/app/public/{{ ($putovanje->brod->image) }}" width=100px height=60px alt="">
                        </th>

                    
                    <th>
                        {{ $putovanje->ruta->nazivRuta }}
                    </th>
                    <th>
                        <img src="/app/public/{{ ($putovanje->ruta->image) }}" width=100px height=60px alt="">
                    </th>
                    <th>
                        {{ $putovanje->cijena }} EUR
                    </th>
                    <td>
                        <a href="{{ route('pregledputovanja.rezerviraj', $putovanje->id) }}" class="btn btn-secondary btn-sm" style="background-color: #495057;">Odaberi</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
   

</body>
</html>

