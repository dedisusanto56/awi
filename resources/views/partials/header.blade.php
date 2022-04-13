<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AWI</title>
	<!-- favion -->
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<!-- link to font awesome -->
	<link media="all" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.css">
	<!-- link to material icon font -->
	<link media="all" rel="stylesheet" href="vendors/material-design-icons/material-icons.css">
	<!-- link to custom icomoon fonts -->
	<link rel="stylesheet" type="text/css" href="css/fonts/icomoon/icomoon.css">
	<!-- link to wow js animation -->
	<link media="all" rel="stylesheet" href="vendors/animate/animate.css">
	<!-- include bootstrap css -->
	<link media="all" rel="stylesheet" href="css/bootstrap.css">
	<!-- include owl css -->
	<link media="all" rel="stylesheet" href="vendors/owl-carousel/owl.carousel.css">
	<link media="all" rel="stylesheet" href="vendors/owl-carousel/owl.theme.css">
	<!-- include main css -->
	<link media="all" rel="stylesheet" href="css/main.css">
	<!-- link to revolution css  -->
	<link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">
	<!-- include fancybox css -->
	<link media="all" rel="stylesheet" href="vendors/fancybox/jquery.fancybox.css">
</head>
<body>
{{-- <body class="default-page"> --}}

	{{-- masalah : class "default-page" pada tag body --}}
	{{-- solusi menggunakan branching
		jika halaman login || tour listing || tour detail, maka menggunakan class "default-page", 
		jika bukan, tidak menggunakan class apapun --}}