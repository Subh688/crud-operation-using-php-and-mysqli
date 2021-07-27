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
			<div class="container">
				<div class="text-center my-5">
					<h1 class="text-warning display-4">Products</h1>
					<hr class="w-25 mx-auto">
				</div>
				<div class="container-fluid">
					<table class="table table-responsive table-stripped table-hover table-bordered">
						<thead class="table-dark">
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Image</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Category</th>
								<th scope="col">Description</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
<?php
	include 'conn.php';

	$q = "select * from items";
	$query = mysqli_query($con, $q);
	while($res = mysqli_fetch_array($query)){
?>
						<tbody>
							<tr>
								<td><?php echo $res['id']; ?></td>
								<td><img class="img-fluid" src="<?php echo $res['gallery']; ?>" alt="product_img"></td>
								<td><?php echo $res['itemname']; ?></td>
								<td><?php echo $res['price']; ?></td>
								<td><?php echo $res['category']; ?></td>
								<td><?php echo $res['description']; ?></td>
								<td class="d-flex">
									<a href="update.php?id=<?php echo $res['id'] ?>" class="btn btn-outline-primary btn-sm m-1">Edit</a>
									<a href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-outline-danger btn-sm m-1">Delete</a>
								</td>
							</tr>
<?php
	}
?>
						</tbody>
					</table>
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