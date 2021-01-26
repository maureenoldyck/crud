<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Goodcard - track your collection of Plants</title>
</head>
<body>

<h1>Goodcard - track your collection of Plants</h1>

<hr>

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
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h2> New plant information:</h2>
    <form action="" method="post">
    <label for="name">Plant name:</label><br>
    <input type="text" id="edit_name" name="edit_name" value="<?= $plant['plant_name'] ?>"><br>
    <label for="place">Place details:</label><br>
    <input type="text" id="edit_place" name="edit_place" value="<?= $plant['place'] ?>" ?><br>
    <label for="water">Water needs details:</label><br>
    <input type="text" id="edit_water" name="edit_water" value="<?= $plant['water'] ?>"?><br>
    <input type="submit" name="edit" id="edit" value="edit">
    </form>


</body>
</html>
