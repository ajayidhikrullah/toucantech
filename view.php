<?php
    include 'header.php';
    include 'classes/memberslist.classes.php';
    // fetch the school data
    $fetchSchools = new Fetchmembers();
    $members = $fetchMembers->getMembers();
?>

<hr>

<table class="table">
    <h4>List of Member details</h4>
    <thead class="table-primary">
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Member School</th>

        </tr>
    </thead>
    <tbody>
        <?php

            foreach($schools as $eachSchool){?>
                <?php echo
                "<tr>
                    <th scope='row'>" . $eachSchool['id'] . "</th>
                    <td>" . $eachSchool['name'] . "</td>
                </tr>";
            ?>
        <?php
        }?>
    </tbody>
</table>







<!-- display all members for a selected school -->
<table class="table">
    <h4>List of Member details</h4>
    <thead class="table-primary">
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Member School</th>

        </tr>
    </thead>
    <tbody>
        <?php

            foreach($members as $eachMembers){?>
                <?php echo
                "<tr>
                    <th scope='row'>" . $eachMembers['id'] . "</th>
                    <td>" . $eachMembers['fullName'] . "</td>
                    <td>" . $eachMembers['email'] . "</td>
                    <td>" . $eachMembers['schools_id'] . "</td>
                </tr>";
            ?>
        <?php
        }?>
    </tbody>
</table>



<?php

    include 'footer.php';

?>