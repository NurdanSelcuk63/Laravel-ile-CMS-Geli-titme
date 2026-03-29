<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Laravel CMS </title>
	<link href="/template/static/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		/* Pro kutusu sidebar-content dışına alındığında AdminKit varsayılanında taşan kısım kesiliyordu */
		#sidebar.sidebar {
			display: flex;
			flex-direction: column;
			min-height: 0;
			overflow: hidden;
		}
		#sidebar .sidebar-content {
			flex: 1 1 auto;
			min-height: 0;
			height: auto !important;
		}
		#sidebar .sidebar-cta {
			flex: 0 0 auto;
		}
	</style>
</head>

<body>
	<div class="wrapper">
	@include('loyouts.app.menu')

		<div class="main">
		 @include('loyouts.app.navbar')

			<main class="content">
				<div class="container-fluid p-0">

					@yield('content')

				</div>
			</main>

			@include('loyouts.app.footer')
		</div>
	</div>
	<script src="/template/static/js/app.js"></script>
	@yield('js')

</body>

</html>