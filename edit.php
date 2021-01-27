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

<h2> Edit plant: </h2>

<div class="card-group collection">
        <?php foreach ($plants as $plant) : ?>
            <div class="card" style="width: 18rem;">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title"><?= $plant['plant_name'] ?></h5>
                    <p class="card-text">
                        <li><?= $plant['place'] ?></li>
                        <li><?= $plant['water'] ?></li>
                        <li class="list-group-item"> Date last watered: <?= date("d/m/Y", strtotime($plant['date_last_watered'])) ?></li>           
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h2> New plant information:</h2>
    <form action="" method="post">
    <div class="form-group">
    <label for="name">Plant name:</label><br>
    <input type="text" id="edit_name" name="edit_name" value="<?= $plant['plant_name'] ?>"><br>
    <label for="place">Place details:</label><br>
    <input type="text" id="edit_place" name="edit_place" value="<?= $plant['place'] ?>" ?><br>
    <label for="water">Water needs details:</label><br>
    <input type="text" id="edit_water" name="edit_water" value="<?= $plant['water'] ?>"?><br>
    <label for="water_date">Date last watered:</label><br>
    <input class="form-control" type="text" id="water_date" name="water_date"><br>
    </div>
    <input type="submit" name="edit" id="edit" value="edit">
    </div>
    </form>


</body>
</html>
