<?php
session_start();
include 'config.php';
include 'function.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
	<div id="main">
		<div id="products">

			<?php 
			#displaying products
				showProduct();
			?>

		</div>
	</div>
	<?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
</body>
</html>