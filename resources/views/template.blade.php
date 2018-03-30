<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>GKOnline</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ url('/') }}/css/main.css" />
	</head>
	<body>
	<!-- Main -->
		<section id="main">
			@yield('content')
		</section>

		<footer id="footer">
				<p><a href="{{ url('/') }}">Accueil</a>
		</footer>

	<!-- Scripts -->
	<script src="{{ url('/') }}/js/jquery.min.js"></script>
	<script src="{{ url('/') }}/js/skel.min.js"></script>
	<script src="{{ url('/') }}/js/main.js"></script>
	<script src="{{ url('/') }}/js/jquery.colorbox.js"></script>

	<script>
		$(document).ready(function(e) {
			$('a.gallery').colorbox({rel:'gal'});
		});
	</script>
	</body>
</html>