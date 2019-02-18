<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Exercice</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


</head>
<body>

      @include('layouts.nav')
   
      @yield('content')
   
      @include('layouts.footer')
      
      <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/magnific-popup.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/circle-progress.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/map.js"></script>

  </body>