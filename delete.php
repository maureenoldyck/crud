<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/749c4bb197.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Goodcard - track your collection of Plants</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php" style="color: #263238;"> <i class="fas fa-seedling" style="color: #26A69A;"></i> Goodcard - track your collection of Plants</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Go back to Home </a>
        </div>
</nav>

<div class="container-fluid p-4">
    <h2 class="p-3"  id="current_collection"> Plant Selected:  </h2>
    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach ($plants as $plant) : ?>
            <div class="col-lg-6 col-md-6 my-3">
                <div class="card bg-light card-body h-100 mt-3">
                    <h5 class="card-title"><?= $plant['plant_name'] ?></h5>
                    <p class="card-text">
                        <li class="list-group-item"><i class="fas fa-sun"></i> <?= $plant['place'] ?></li>
                        <li class="list-group-item"> <i class="fas fa-tint"></i> <?= $plant['water'] ?></li>
                        <li class="list-group-item"> <i class="fas fa-calendar-day"></i> Date last watered: <?= date("d/m/Y", strtotime($plant['date_last_watered'])) ?></li>           
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container-fluid p-3" style="background-color: #e3f2fd;">
    <div class="container">
        <form action="" method="post">
            <div class="form-inline">
                <h2 class="p-3" id="add_plant"> Confirm delete <?= $plant['plant_name'] ?> :</h2>
                <input class="btn" style="background-color: #E57373;" type="submit" name="confirm_delete" id="confirm_delete" value="confirm delete">
            </div>
        </form>
    </div>
</div>

<div class="footer p-3" style="text-align: center; background-color:#E0F7FA;">
    <span style="font-size:x-small"> Made for the Webdevelopment Training at Becode, Ghent</span>
</div>

</body>
</html>
