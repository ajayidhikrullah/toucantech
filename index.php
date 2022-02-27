<?php
    session_start();
    include 'header.php';
    include 'classes/schoollist.classes.php';
    // fetch the school data
    $fetchSchools = new Fetchschool();
    $schools = $fetchSchools->getSchools();

    // return success or failed message
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
                        <input type="text" class="form-control" id="floatingInput" name="school" placeholder="add more schools...">
                        <hr>
                        <!-- <label for="floatingInput">Name of school</label> -->

                        <button class="btn btn-lg btn-primary" name="add_school">Add School</button>
                        <hr>
                    </form>

                    <!-- <div class="card-footer text-muted">
                        <a href="#">Add Member</a>
                    </div> -->

                </div>
            </div>
</div>

           
<?php

include 'footer.php';

?>

