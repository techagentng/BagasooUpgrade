<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
<head>
<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<!--[if IE]>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<![endif]-->
<title>{{config('app.name', 'Banjul Accord Group')}}</title>
<meta name="author" content="Nnah Kenneth">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/owl-slider.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/settings.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}"/>
<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

<!--[if lt IE 9]>
<script src="javascript/html5shiv.js"></script>
<script src="javascript/respond.min.js"></script>
<![endif]-->

</head>
<body>

    @include('inc/navbar')
@yield('content')
    @include('inc/footer')


<script type="text/javascript" src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/engo-plugins.js')}}"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{{asset('assets/js/map-icons.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/store.js')}}"></script>


</body>
</html>
