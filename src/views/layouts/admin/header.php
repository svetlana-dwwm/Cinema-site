<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?> | Movies</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-primary mb-4" date-bs-theme="dark">
		<div class="container">
			<a class="navbar-brand" href="<?= $router->generate('addMovie'); ?>">Admin Movies</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link" href="https://movies.test/admin/films">Movies</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?= $router->generate('addUser'); ?>">Utilisateurs</a>
				</li>
			</ul>
			<div class="navbar-text">
				<a href="<?= $router->generate('disconnect'); ?>" class="btn btn-danger">Deconnexion</a></div>
			</div>
		</div>
		</nav>
	</header>
	<main class="container mb-4">
		<?php displayAlert(); ?>
