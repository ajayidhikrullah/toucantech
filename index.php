<?php session_start();?>

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
<?php
    if (isset($_SESSION['status'])) {
        # code...
        echo "<h4>" .$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
    }
?>

<div class="container">
            <!-- <nav class="navbar navbar-default"> -->
                <div class="container-fluid">
                    <div class="card text-center">
                        <div class="card-header logo">
                            <a class="navbar-brand" href="index.php"><h3>TouCanTech</h3></a>
                        </div>
                    </div>
                </div>
            </nav>

            <hr>
            <!-- Add new member -->
            <div class="card text-center">
                <div class="card-header">
                    Add Schools
                </div>

                <div class="card-body">
                    <h4>More schools can be added</h4>
                    <input type="text" class="form-control" id="floatingInput" name="school" placeholder="add more schools...">
                    <hr>
                    <!-- <label for="floatingInput">Name of school</label> -->

                    <button class="btn btn-lg btn-primary" name="submit">Add School</button>
                    <hr>


                    <div class="card-footer text-muted">
                        <a href="#">Add Member</a>
                    </div>

                </div>
            </div>



            <!-- start FOrMs -->
        <hr>
                <h4>Add Member</h4>
        <div class="card text-center">
            <div class="card-body">
                <form method="POST" class="form-horizontal" action="include/member.inc.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="fullName" id="floatingInput" placeholder="full name please...">
                        <label for="floatingInput">Full name</label>
                    </div>
                            
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                
                    <div class="form-floating">
                    <select class="form-select" id="floatingSelect" name="school" aria-label="Floating label select example">
                        <option class="" selected>Kindly select School Name</option>
                        <option value="GreenwichUni">Greenwich Uni</option>
                        <option value="DhikrullahUni">Dhikrullah University</option>
                        <option value="KingSaudiUni">King Saudi University</option>
                        <option value="UniToucanTech">University of ToucanTech</option>
                    </select>
                        <label for="floatingSelect">Kindly selects<label>
                    </div> 

                    <hr>
                    <div class="card text-center">
                        <div class="card-body">
                            <button class="btn btn-lg btn-outline-primary" name="submit">Add member</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

           




    
    <!-- script I added from Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>