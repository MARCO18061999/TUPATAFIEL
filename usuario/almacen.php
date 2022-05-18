<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>TU 🐾 FIEL</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	
	<link rel="stylesheet" href="../public/offcanvas.css">
</head>

<body class="bg-light">

	<?php include_once("menu.php"); ?>

	<div class="nav-scroller bg-body shadow-sm">
		<nav class="nav nav-underline" aria-label="Secondary navigation">
			<a class="nav-link active" aria-current="page" href="#">Dashboard</a>
			<a class="nav-link" href="#">
				Friends
				<span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
			</a>
			<a class="nav-link" href="#">Explore</a>
			<a class="nav-link" href="#">Suggestions</a>
			<a class="nav-link" href="#">Link</a>
			<a class="nav-link" href="#">Link</a>
			<a class="nav-link" href="#">Link</a>
			<a class="nav-link" href="#">Link</a>
			<a class="nav-link" href="#">Link</a>
		</nav>
	</div>

	<main class="container">
		
		<?php include_once("saludo.php"); ?>

		<div class="my-3 p-3 bg-body rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">PRODUCTOS</h6>
			<div class="d-flex text-muted pt-3">
				<svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
					xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
					preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
						dy=".3em">32x32</text>
				</svg>

				<p class="pb-3 mb-0 small lh-sm border-bottom">
					<strong class="d-block text-gray-dark">@username</strong>
					Some representative placeholder content, with some information about this user. Imagine this being
					some sort
					of status update, perhaps?
				</p>
			</div>
			<div class="d-flex text-muted pt-3">
				<svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
					xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
					preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#e83e8c"
						dy=".3em">32x32</text>
				</svg>

				<p class="pb-3 mb-0 small lh-sm border-bottom">
					<strong class="d-block text-gray-dark">@username</strong>
					Some more representative placeholder content, related to this other user. Another status update,
					perhaps.
				</p>
			</div>
			<div class="d-flex text-muted pt-3">
				<svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
					xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
					preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%" fill="#6f42c1"
						dy=".3em">32x32</text>
				</svg>

				<p class="pb-3 mb-0 small lh-sm border-bottom">
					<strong class="d-block text-gray-dark">@username</strong>
					This user also gets some representative placeholder content. Maybe they did something interesting,
					and you
					really want to highlight this in the recent updates.
				</p>
			</div>
			<small class="d-block text-end mt-3"><!-- <a href="#">All updates</a> -->&nbsp;</small>
		</div>

		<div class="my-3 p-3 bg-body rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
			<div class="d-flex text-muted pt-3">
				<svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
					xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
					preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
						dy=".3em">32x32</text>
				</svg>

				<div class="pb-3 mb-0 small lh-sm border-bottom w-100">
					<div class="d-flex justify-content-between">
						<strong class="text-gray-dark">Full Name</strong>
						<a href="#">Follow</a>
					</div>
					<span class="d-block">@username</span>
				</div>
			</div>
			<div class="d-flex text-muted pt-3">
				<svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
					xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
					preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
						dy=".3em">32x32</text>
				</svg>

				<div class="pb-3 mb-0 small lh-sm border-bottom w-100">
					<div class="d-flex justify-content-between">
						<strong class="text-gray-dark">Full Name</strong>
						<a href="#">Follow</a>
					</div>
					<span class="d-block">@username</span>
				</div>
			</div>
			<div class="d-flex text-muted pt-3">
				<svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
					xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
					preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
						dy=".3em">32x32</text>
				</svg>

				<div class="pb-3 mb-0 small lh-sm border-bottom w-100">
					<div class="d-flex justify-content-between">
						<strong class="text-gray-dark">Full Name</strong>
						<a href="#">Follow</a>
					</div>
					<span class="d-block">@username</span>
				</div>
			</div>
			<small class="d-block text-end mt-3">
				<a href="#">All suggestions</a>
			</small>
		</div>
	</main>


	<!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
	<script src="../public/js/bootstrap.bundle.min.js"></script>

	<!-- <script src="offcanvas.js"></script> -->
	<script src="../public/offcanvas.js"></script>

	<!-- <script src="almacen.js"></script> -->
</body>

</html>