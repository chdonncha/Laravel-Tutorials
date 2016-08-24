<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content"width=device-width, initial-scale=1.0" />
		<title>Foundation | Welcome</title>
		<link rel="stylesheet" href="{!! asset('css/foundation.css') !!}" />
		<script src="{!! asset('js/vendor/modernizr.js') !!}"></script>
	</head>

<body>

	<!-- Header and Nav -->

	<nav class="top-bar" data-topbar>
			<h3><a href="#">ODOT</a></h3
		</ul>
	</nav>

	<!-- End Header and Nav -->

	<div class="row">
		<div class="large-12">
			@yield('content')
		</div>
	</div>

	<!-- Footer -->

	<footer class="row">
		<div class="large-12 columns">
			<hr />
			<div class="row">
				<div class="large-6 columns">
					<p>Team Treehouse</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
	</body>
</html>

				

