<?php
	session_start();
	require_once('database/products.php');
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Mebo</title>
</head>

<body>

	<body>
		<?php require 'views/menu.php' ?>
		<div class="container">
			<?php
				$request = $_SERVER['REQUEST_URI'];
				switch ($request) {
					case '/carrinho' :
						require 'views/card.php';
						break;
					case '':
					case '/':
						require 'views/products.php';
						break;
					default:
						http_response_code(404);
						require 'views/404.php';
						break;
				}
			?>

			<?php require 'views/footer.php' ?>

	</body>

</html>