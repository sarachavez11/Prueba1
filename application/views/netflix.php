<!DOCTYPE HTML5>
<html lang="es">
	<head>
		<meta charset="utf-8">

		<title><?= $title; ?></title>
	</head>
	<body>
		<h1> <?= $ghj; ?> </h1>
		<h2> <?= $total; ?> </h2>
		<!--p>  <?php print_r($arreglo); ?> </p>
		<p> <?php var_dump($asociativo); ?> </p-->
		<!--p>para imprimir valores de arreglo</p-->
		<?= $asociativo['zapato']."<br>";?>
		<?= $arreglo[3];?>
	</body>
</html>