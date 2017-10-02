<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beta Corp</title>
	<link rel="stylesheet" href="vendor/foundation.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="home">

<?php include "components/header.php" ?>

	<main class="main">
		<section class="section">

			<div class="section-header">
				<div class="row">
					<div class="columns small-12">
						<h5 class="section-header-title">Recente projecten</h5>
						<a href="#" class="btn section-header-button">Bekijk alles</a>
					</div>
				</div>
			</div>

			<div class="section-carousel carousel">
				<div class="row">
					<div class="columns small-12">
						<div class="row collapse">
							<div class="carousel-item columns small-4">
								<div class="carousel-item-thumb"></div>
								<div class="carousel-item-info">
									<h5 class="carousel-item-header">
										Projecttitel
									</h5>
									<p class="carousel-item-text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat harum dolores quis, explicabo. Aliquid veritatis, explicabo cum provident.
									</p>
									<a href="#" class="carousel-item-link">Bekijk de hele case</a>
								</div>
							</div>
							<div class="carousel-item columns small-4">
								<div class="carousel-item-thumb"></div>
								<div class="carousel-item-info">
									<h5 class="carousel-item-header">
										Projecttitel
									</h5>
									<p class="carousel-item-text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat harum dolores quis, explicabo. Aliquid veritatis, explicabo cum provident.
									</p>
									<a href="#" class="carousel-item-link">Bekijk de hele case</a>
								</div>
							</div>
							<div class="carousel-item columns small-4">
								<div class="carousel-item-thumb"></div>
								<div class="carousel-item-info">
									<h5 class="carousel-item-header">
										Projecttitel
									</h5>
									<p class="carousel-item-text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat harum dolores quis, explicabo. Aliquid veritatis, explicabo cum provident.
									</p>
									<a href="#" class="carousel-item-link">Bekijk de hele case</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

		<section class="section info-block post-typography" style="background-image: url(uploads/pexels-photo-541522.jpeg);">
			<div class="row">
				<div class="columns small-12">
					<div class="info-block-content">
						<h2>U kunt uw applicatie tijdens de ontwikkeling gebruiken en feedback geven</h2>
						<p>
							Zo weet u zeker dat er niets mis gaat.
						</p>
						<a href="#" class="btn">Kom meer te weten</a>
					</div>
				</div>
			</div>
		</section>

		<section class="section">

			<div class="section-header">
				<div class="row">
					<div class="columns small-12">
						<h5 class="section-header-title is-centered">Ontmoet ons team</h5>
					</div>
				</div>
			</div>

			<div class="circle-grid">
				<div class="row">
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
					<div class="columns small-4 medium-3 circle-grid-wrapper">
						<div class="circle-grid-item">
							<img src="#" alt="">
						</div>
					</div>
				</div>
			</div>

		</section>

		<div class="section has-divider">

			<div class="section-header has-text">
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

		<section class="section">
			<div class="maps-field"></div>
		</section>
	</main>

<?php include "components/footer.php" ?>
	
</body>
</html>