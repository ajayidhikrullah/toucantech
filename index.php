<?php
    session_start();
    include 'header.php';
    include 'classes/schoollist.classes.php'; //this is handling the data from sql query
    $fetchSchools = new Fetchschool();     // fetch the school data
    $schools = $fetchSchools->getSchools();
?>
        <hr>
        <!-- Add new member -->
    <div class="card text-center">
        <div class="card-header">
            Add Schools
        </div>

        <div class="card-body col-md-6 offset-md-3">
            <h4>More schools can be added</h4>
            <form action="include/school.inc.php" method="POST">    
                <input type="text" class="form-control" id="floatingInput" name="school" placeholder="add more schools..." required>
                <hr>
                <button class="btn btn-lg btn-primary" name="add_school">Add School</button>
                <hr>
            </form>
        </div>
    </div>
</div>
      
<?php

    include 'footer.php';

?>

