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

<div class="d-flex justify-content-end mb-2">
</div>
  <div class="card card-defatult">
    <div class="card-header" style=" background-color:silver; ">GOST</div>
    <div class="card-body">
        <table class="table">
            <thead>
              
               <th>GOST</th>
               <th>PUTOVANJE - DATUM</th>
               <th>PUTOVANJE - VRIJEME</th>
               <th>CIJENA</th> 
                
                
            </thead>
            <tbody>
                @foreach($gostputovanja as $gostputovanje)
                <tr>
                  <td>
                  </td>
                  <th>
                    {{ $gostputovanje->putovanje->datum  }}
                  </th>
                  <th>
                    {{ $gostputovanje->putovanje->vrijeme  }}
                  </th>
                  <th>
                    {{ $gostputovanje->cijenaGosta  }}  KN              
                   </th>
                  <td>
                  </td>
                  <td>
                    <a href="{{ route('izbrisirezervaciju', $gostputovanje->putovanje->id) }}" class="btn btn-secondary btn-sm">Izbriši</a>
                </td>
              </tr>
                @endforeach
            </tbody>
        </table>
    
  </div>
</div>
    </div>
</div>

</body>