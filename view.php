<?php
    include 'header.php';
    include 'classes/memberslist.classes.php';
    // include 'classes/schoollist.classes.php';

    // fetch the school data
    $fetchMembers = new Fetchmembers();
    $members = $fetchMembers->getMembers();
    // var_dump($members['email']);exit();
    
?>

<hr>
<!-- List of schools -->
<table class="table">
    <h4>List of Member Schools</h4>
    <thead class="table-primary">
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($members as $eachMember){
                ?>
                <?php echo
                "<tr>
                    <th scope='row'>" . $eachMember['id'] . "</th>
                    <td>" . $eachMember['fullName'] . "</td>
                    <td><a class='nav-link' href='view.php?id={$eachMember['schools_id']}'>{$eachMember['email']}</a><td>
                </tr>";
            ?>
        <?php
        }?>
    </tbody>
</table>

<!-- display all members for a selected school -->
<!-- <table class="table">
    <h4>List of Member details</h4>
    <thead class="table-primary">
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Member Name</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody> -->
        
        <?php
            // foreach($members as $eachMembers){ ?>
                <?php //echo
                // "<tr>
                    // <th scope='row'>" . $eachMembers['id'] . "</th>
                    // <td>" . $eachMembers['fullName'] . "</td>
                    // <td>" . $eachMembers['email'] . "</td>
                    // <td>" . $eachMembers['schools_id'] . "</td>
                // </tr>";
            ?>
        <?php
        // }
        ?>
    <!-- </tbody>
</table> -->


<?php

    include 'footer.php';

?>