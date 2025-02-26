<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Gallery Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
	<style>
		.bg-image {
			background-image: url('background.jpg');
			background-size: cover;
			height: 100vh;
		}

	 </style>
	 
</head>
<body class="bg-image">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Gallery Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container mt-3">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<img src="zx.jpg" class="card-img-top" title="" style="height: 12rem;">
				<div class="card-footer text-center">
					<a href=""><i class="fa-regular m-1"></i></a>FIGZ
					<a href=""><i class="fa-regular m-1"></i></a>BISMILLAH
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
	<p>&copy; UKK RPL 2024 | Naufal Figa Pandu W</p>
</footer>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
