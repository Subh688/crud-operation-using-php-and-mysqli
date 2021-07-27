<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>SubhMart - Admin</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php">Admin</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="insert.php">Insert</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="display.php">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active ms-2 btn btn-warning btn-sm text-dark" href="#">Visit Site</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<section>
			<div class="container text-center my-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="m-3 card shadow" style="width: 18rem;">
							<img src="https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804__340.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-success font-weight-bold text-uppercase">Add Product</h5>
								<p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="insert.php" class="btn btn-outline-success w-100 card-btn">Add Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="m-3 card shadow-lg" style="width: 18rem;">
							<img src="https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804__340.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-danger font-weight-bold text-uppercase">View All Products</h5>
								<p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="display.php" class="btn btn-outline-danger w-100 card-btn">Browse Products</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="m-3 card shadow" style="width: 18rem;">
							<img src="https://cdn.pixabay.com/photo/2016/11/22/21/57/apparel-1850804__340.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-primary font-weight-bold text-uppercase">Website</h5>
								<p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-outline-primary w-100 card-btn">See Website</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="bg-primary text-center py-5 d-flex">
				<p class="text-white font-weight-bold m-auto">&copy; 2021 SubhMart</p>
				<a href="#"><i class="animated infinite heartBeat fas fa-arrow-circle-up fa-3x text-white me-5"></i></a>
			</div>
		</footer>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>