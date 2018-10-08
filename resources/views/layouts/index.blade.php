<!doctype html>
<html lang="{{app() ->getLocale()  }}">
<head>
	@include('partials.header')

</head>
<body>
	<div class="fh5co-loader"></div>
	
	<div id="page">
@include('partials.nav')
@yield('content')
@include('partials.footer')
</div>
</body>
</html>