<?php
    session_start();
    include 'header.php';
    include 'classes/schoollist.classes.php';
    // fetch the school data
    $fetchSchools = new Fetchschool();
    $schools = $fetchSchools->getSchools();
?>

<!-- return success message -->




<hr>
<div class="card text-center">
    <h4>Add Member</h4>
    <div class="card-body">
        <form method="POST" class="form-horizontal" action="include/member.inc.php">

            <div class="col-md-12 offset-md-3">
                <div class="form-floating col-sm-6 mb-3">
                    <input type="text" class="form-control" name="fullName" id="floatingInput" placeholder="full name please..." required>
                    <label for="floatingInput">Full name</label>
                </div>
                        
                <div class="form-floating col-sm-6 mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Members email" required>
                    <label for="floatingInput">Email address</label>
                </div>
            
                <div class="form-floating col-sm-6 mb-3">
                    <select class="form-select " id="floatingSelect" name="school" aria-label="Floating label select example" required>
                            <option class="" selected>Kindly select School Name</option>

                            <!-- fetch data from DB and add to select tag -->
                        <?php foreach($schools as $eachSchool){?>
                            <!-- // var_dump($contacts);exit;
                            //save each of the member database fields in $eachSchool -->
                            <!-- Fetch schools based on ID and show users name of the school as an hyperlink field -->
                            <option value = <?php echo $eachSchool['id'] ?>> <?php echo $eachSchool['name']; ?></option>
                        <?php
                            ;}
                        ?>

                    </select>
                    <label for="floatingSelect">Kindly selects School of Choice<label>
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
// include footer here
    include 'footer.php';
?>