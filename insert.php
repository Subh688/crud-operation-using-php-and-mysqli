<?php
	include 'conn.php';

	if(isset($_POST['done'])){
		$itemname = $_POST['itemname'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$gallery = $_POST['gallery'];

		$q = "INSERT INTO `items`(`itemname`, `price`, `category`, `description`, `gallery`) VALUES ('$itemname', '$price', '$category', '$description', '$gallery')";

		$query = mysqli_query($con, $q);

		header('location:display.php');
	}
?>

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
			<div class="text-center my-5">
				<h1 class="display-4">Add Product</h1>
				<hr class="w-25 mx-auto">
			</div>
			<div class="col-lg-6 m-auto my-5">
                <form class="was-validated" method="post">
	                <div class="mb-3">
		                <label for="itemname" class="form-label">Product Name</label>
		                <input type="text" class="form-control" name="itemname" required placeholder="Enter Product Name">
	                </div>
	                <div class="mb-3">
		                <label for="price" class="form-label">Product Price</label>
		                <input type="text" class="form-control" name="price" required placeholder="Enter Product Price">
	                </div>
	                <div class="mb-3">
		                <label for="category" class="form-label">Product Category</label>
		                <input type="text" class="form-control" name="category" required placeholder="Enter Product Category">
	                </div>
	                <div class="mb-3">
		                <label for="gallery" class="form-label">Product Image</label>
		                <input type="text" class="form-control" name="gallery" required placeholder="Paste Image Url">
	                </div>
	                <div class="mb-3">
		                <label for="description" class="form-label">Product Description</label>
		                <textarea rows="5" type="text" class="form-control" name="description" required placeholder="Describe Your Product Here"></textarea>
	                </div>
	                <input type="submit" name="done" value="Submit" class="btn btn-outline-primary">
                </form>
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
