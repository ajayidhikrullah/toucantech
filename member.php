<?php
    // session_start();
    include 'header.php';
    include 'classes/schoollist.classes.php';
    // fetch the school data
    $fetchSchools = new Fetchschool();
    $schools = $fetchSchools->getSchools();

    // return success or failed message
?>
<!-- start FOrMs -->
   <hr>
        <div class="card text-center">
            <h4>Add Member</h4>

            <div class="card-body">
                <form method="POST" class="form-horizontal" action="include/member.inc.php">
                <div class="col-md-12 offset-md-3">
                    <div class="form-floating col-sm-6 mb-3">
                        <input type="text" class="form-control" name="fullName" id="floatingInput" placeholder="full name please...">
                        <label for="floatingInput">Full name</label>
                    </div>
                            
                    <div class="form-floating col-sm-6 mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Members email">
                        <label for="floatingInput">Email address</label>
                    </div>
                
                    <div class="form-floating col-sm-6 mb-3">
                        <!-- fetch data from DB and add to select tag -->

                        <select class="form-select " id="floatingSelect" name="school" aria-label="Floating label select example">
                        <option class="" selected>Kindly select School Name</option>
                <?php
            // var_dump($contacts);exit;
                    foreach($schools as $eachSchool){
                    // var_dump($eachSchool);exit()
                ?>
                    <option><?php echo $eachSchool['name'] ?></option>
              <?php
            }?>
                    </select>
                        <label for="floatingSelect">Kindly selects<label>
                    </div> 
                </div>

                    <hr>

                    <div class="card text-center">
                        <div class="card-body">
                            <button class="btn btn-lg btn-outline-primary" name="submit">Add member</button>
                        </div>
                    </div>
                </form>
            </div>



<?php

include 'footer.php';

?>