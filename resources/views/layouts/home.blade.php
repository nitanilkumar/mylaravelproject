<!doctype html>
<html lang="{{app() ->getLocale()  }}">
<head>
	@include('partials.homeheader')

</head>
<body>
	
@include('partials.homenav')
@yield('content')
@include('partials.homefooter')

</body>
</html>