<!-- Header file holds all the Navigation bars -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToucanTech</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="index.php"><h3>TouCanTech</h3></a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="btn-pry">
                <a class="nav-link" aria-current="page" href="index.php">Create School</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="member.php">Create Member</a>
                </li>

                <!-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="view.php">View Member</a>
                </li> -->

                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="viewschools.php">View Schools</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <!-- Throw success or Error message -->
    <?php
        if (isset($_SESSION['status'])) {
            # code...
            echo "<h4>" .$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
    ?>
    <!-- script I added from Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

