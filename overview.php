<!doctype html>
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
<nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php"> Goodcard - track your collection of Plants</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#current_collection">Current collection </a>
            <a class="nav-item nav-link" href="#add_plant">Add new plant</a>
        </div>
</nav>

<div class="container-fluid p-4">
    <h2 id="current_collection"> Current collection: </h2>
    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach ($plants as $plant) : ?>
            <div class="col-lg-3 col-md-6 my-3">
                    <div class="card bg-light card-body h-100 mt-3">
                        <h5 class="card-title"><?= $plant['plant_name'] ?></h5>
                        <p class="card-text">
                            <li class="list-group-item"><?= $plant['place'] ?></li>
                            <li class="list-group-item"><?= $plant['water'] ?></li>
                            <li class="list-group-item"> Date last watered: <?= date("d/m/Y", strtotime($plant['date_last_watered'])) ?></li>           
                            <form action="?edit=<?=$plant['id']?>" method="post">
                                <input class="btn btn-primary btn-block my-3" type="submit" name="update" value="update">
                            </form>
                            <form action="?delete=<?=$plant['id']?>" method="post">
                                <input class="btn btn-danger btn-block" type="submit" name="delete" value="delete">
                            </form>
                        </p>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container-fluid p-3" style="background-color: #e3f2fd;">

    <h2 id="add_plant"> Add a new plant in your collection:</h2>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Plant name:</label><br>
                <input class="form-control" type="text" id="name" name="name" required><br>
            </div>
            <div class="form-group">
                <label for="place">Place details:</label><br>
                <input class="form-control" type="text" id="place" name="place"><br>
            </div>
            <div class="form-group">
                <label for="water">Water needs details:</label><br>
                <input class="form-control" type="text" id="water" name="water"><br>
            </div>
            <div class="form-group">
                <label for="water_date">Date last watered:</label><br>
                <input class="form-control" type="text" id="water_date" name="water_date"><br>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" id="submit">
        </form>
    </div>
</div>

</body>

</html>