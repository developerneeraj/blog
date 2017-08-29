<!DOCTYPE html>
<html>
<head>
	<title>Laravel Map</title>
</head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<body>
@yield('content')


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPCb8Nz1_6q5hx_MWOBo4IdLj6eBDADFU"
    async defer></script>

    <script src="{{asset('js/script.js')}}"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>