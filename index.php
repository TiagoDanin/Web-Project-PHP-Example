<?php
	if(!isset($_SESSION)) {
		session_start();
	};

	require_once('database/products.php');
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.0.45/css/materialdesignicons.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" />
	<title>MeboHile</title>
</head>

<body>

	<body>
		<?php require 'views/menu.php' ?>
		<div class="container">
			<?php
				$request = '';
				if (isset($_SERVER['PATH_INFO'])) {
					$request = $_SERVER['PATH_INFO'];
				}

				switch ($request) {
					case '/finalizar':
						require 'views/checkout.php';
						break;
					case '/pronto':
						require 'views/done.php';
						break;
					case '/carrinho' :
						require 'views/card.php';
						break;
					case '/produtos':
						require 'views/products.php';
						break;
					case '':
					case '/':
						require 'views/home.php';
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