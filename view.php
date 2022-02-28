<?php
    // here, Iimported memberslist.classes.php to get the data from SQL querying database. 
    include 'header.php';
    include 'classes/memberslist.classes.php';
    $fetchMembers = new Fetchmembers(); //Instantiated the Members class and saved in a variable
    $members = $fetchMembers->getMembers();
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
        <!-- loop out each of the data in fields below -->
        <?php
            foreach($members as $eachMember){?>
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

<?php

    include 'footer.php';

?>