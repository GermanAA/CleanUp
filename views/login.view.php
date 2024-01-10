<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!--<script src="js/jquery-3.5.1.js"></script>-->
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/603f27fb7e.js"></script>
	<link rel="stylesheet" type="text/css" href="css\estilos.css">
	<script type="text/javascript" src="js/index.js"></script>


	<title> - Iniciar Sesión</title>


</head>

<body class="text-center">

	<div class="row justify-content-center mt-3">
		<div class="col-12 col-sm-6 col-md-3">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-signin" name="login">

				<img src="" width="200" height="100" alt="" loading="">

				<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

				<div class="form-group row">



					<div class="col-12 ">
						<input type="text" name="usuario" class="form-control mt-3" placeholder="Usuario">
					</div>


				</div>

				<div class="form-group row">


					<div class="col-12 ">
						<input type="password" name="password" class="form-control mt-3" placeholder="Contraseña">
					</div>

				</div>


				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>





				<br />

				<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

				<?php if (!empty($errores)) : ?>

					<div class="error">
						<ul>
							<?php echo $errores ?>
						</ul>
					</div>

				<?php endif; ?>

			</form>

			

		</div>
	</div>








	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>