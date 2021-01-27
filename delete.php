<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Goodcard - track your collection of Plants</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <h1>Goodcard - track your collection of Plants</h1>
  </a>
</nav>

<h2> Plant selected: </h2>

<div class="card-group collection">
        <?php foreach ($plants as $plant) : ?>
            <div class="card" style="width: 18rem;">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title"><?= $plant['plant_name'] ?></h5>
                    <p class="card-text">
                        <li><?= $plant['place'] ?></li>
                        <li><?= $plant['water'] ?></li>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h2> Confirm delete:</h2>
    <form action="" method="post">
    <div class="form-group">
    <input type="submit" name="confirm_delete" id="confirm_delete" value="confirm delete">
    </div>
    </form>


</body>
</html>
