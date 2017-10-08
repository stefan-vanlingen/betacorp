<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beta Corp</title>
	<link rel="stylesheet" href="vendor/foundation.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<header class="header" style="background-image: url('uploads/background.jpeg');">
		<div class="navbar is-transparent">
			<div class="row">
				<div class="columns small-12">
					<div class="navbar-logo"></div>	
					<nav class="nav">
						<a href="/" class="nav-item">Home</a>
						<a href="#" class="nav-item">Over ons</a>
						<a href="#" class="nav-item is-active">Portfolio</a>
						<a href="#" class="nav-item">Contact</a>
					</nav>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="row">
				<div class="column small-12">
					<h1 class="header-title">Portfolio</h1>
				</div>
			</div>
		</div>
		<div class="featured-projects">
			<div class="featured-project">
				<img src="uploads/proffile1.png" alt="">
			</div>
			<div class="featured-project">
				<img src="uploads/mijndomein2.png" alt="">
			</div>
		</div>
	</header

	<main class="main">

		<section class="section">
			<div class="section-header has-text big-padding">
				<div class="row">
					<div class="columns small-12 small-centered text-center">
						<h5 class="section-header-title">Ons beste werk op een rijtje</h5>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi possimus suscipit tenetur provident.
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-portfolio">
			
			<div class="portfolio">
				<div class="row small-up-3">
					<div class="column column-block">
						<a href="#">
							<div class="portfolio-item">
								<div class="portfolio-item-header">
									<div class="portfolio-item-title">Project</div>
								</div>
								<div class="portfolio-item-thumb"></div>
							</div>
						</a>
					</div>
					<div class="column column-block">
						<a href="#">
							<div class="portfolio-item">
								<div class="portfolio-item-header">
									<div class="portfolio-item-title">Project</div>
								</div>
								<div class="portfolio-item-thumb"></div>
							</div>
						</a>
					</div>
					<div class="column column-block">
						<a href="#">
							<div class="portfolio-item">
								<div class="portfolio-item-header">
									<div class="portfolio-item-title">Project</div>
								</div>
								<div class="portfolio-item-thumb"></div>
							</div>
						</a>
					</div>
					<div class="column column-block">
						<a href="#">
							<div class="portfolio-item">
								<div class="portfolio-item-header">
									<div class="portfolio-item-title">Project</div>
								</div>
								<div class="portfolio-item-thumb"></div>
							</div>
						</a>
					</div>

					<div class="column column-block">
						<a href="#">
							<div class="portfolio-item">
								<div class="portfolio-item-header">
									<div class="portfolio-item-title">Project</div>
								</div>
								<div class="portfolio-item-thumb"></div>
							</div>
						</a>
					</div>
					<div class="column column-block">
						<a href="#">
							<div class="portfolio-item">
								<div class="portfolio-item-header">
									<div class="portfolio-item-title">Project</div>
								</div>
								<div class="portfolio-item-thumb"></div>
							</div>
						</a>
					</div>
				</div>
			</div>

		</section>

		<div class="section has-divider section-form">

			<div class="section-header has-text big-padding">
				<div class="row">
					<div class="columns small-12 text-center">
						<h5 class="section-header-title">Geïnteresseerd?</h5>
						<p>
							Neem vandaag nog contact met ons op om een afspraak te maken.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="columns small-12">
					<form action="" class="form">
						<div class="row">
							<div class="columns small-12 medium-4">
								<label for="full_name">Volledige naam</label>
								<input id="full_name" type="text">
							</div>
							<div class="columns small-12 medium-4">
								<label for="city">Woonplaats</label>
								<input id="city" type="text">
							</div>
							<div class="columns small-12 medium-4">
								<label for="email">E-mailadres</label>
								<input id="email" type="email">
							</div>
						</div>
						<div class="row">
							<div class="columns small-12">
								<label for="message">Uw bericht</label>
								<textarea name="message" id="message" rows="20"></textarea>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</main>

<?php include "components/footer.php" ?>
	
</body>
</html>