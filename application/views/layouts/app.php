<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
	<meta name="generator" content="Hugo 0.80.0" />
	<title><?= isset($title) ? $title : 'CI3Shop' ?> - Codeigniter Shop</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/" />

	<!-- Bootstrap core CSS -->
	<link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Fontawesome CSS -->
	<link href="/assets/libs/fontawesome/css/all.min.css" rel="stylesheet" />

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
	<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json" />
	<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3" />
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico" />
	<meta name="theme-color" content="#7952b3" />

	<link rel="stylesheet" href="/assets/css/app.css" />
</head>

<body>

<!-- Navbar -->
<?php $this->load->view('layouts/_navbar'); ?>
<!-- End Navbar -->

<!-- Content -->
<?php $this->load->view($page); ?>
<!-- End Content -->

	<script src="/assets/libs/jquery/jquery-3.6.0.min.js"></script>
	<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/app.js"></script>
</body>

</html>
