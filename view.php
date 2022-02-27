<?php
    include 'header.php';
    include 'classes/schoollist.classes.php';
    // fetch the school data
    $fetchSchools = new Fetchschool();
    $schools = $fetchSchools->getSchools();
?>

<hr>

<!-- display all members for a selected school -->
<table class="table">
    <h4 style:{ center;>List of Member details</h4>
    <thead class="table-primary">
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Member Name</th>
            <th scope="col">Member Email</th>
            <th scope="col">Member School</th>

        </tr>
    </thead>
    <tbody>
        <?php

            foreach($schools as $eachSchool){?>
                <?php echo
                "<tr>
                    <th scope='row'>" . $eachSchool['id'] . "</th>
                    <td>" . $eachSchool['fullName'] . "</td>
                    <td>" . $eachSchool['email'] . "</td>
                    <td>" . $eachSchool['name'] . "</td>
                </tr>";
            ?>
        <?php
        }?>
    </tbody>
</table>


<?php

    include 'footer.php';

?>