<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?= base_url(); ?>/public/css/style.css">
</head>

<body>

	<div id="tombolKembali">
		<a href="<?= base_url('welcome'); ?>">Kembali</a>
	</div>

	<div id="container">
		<h1 class="joe">Hello World</h1>
	</div>

	<div id="app">

	</div>

	<script src="<?= base_url(); ?>/public/js/main.js"></script>
</body>

</html>