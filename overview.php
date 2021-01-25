<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Goodcard - track your collection of Plants</title>
</head>
<body>

<h1>Goodcard - track your collection of Plants</h1>

<ul>
<?php foreach ($plants as $plant) : ?>
    <li><?= $plant['name'] ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>