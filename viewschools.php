<?php
    // session_start();
    include 'header.php';
    include 'classes/schoollist.classes.php';
    // fetch the school data
    $fetchSchools = new Fetchschool();
    $schools = $fetchSchools->getSchools();
?>

<hr>

<!-- display all members for a selected school -->
<table class="table">
        <h4>List of Schools</h4>
        <thead class="table-primary">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">School Name</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach($schools as $eachSchool){ ?>
                <?php echo
                "<tr>
                    <th scope='row'>" . $eachSchool['id'] . "</th>
                    <td> <a class='nav-link' href='view.php?id={$eachSchool['id']}'>" . $eachSchool['name'] . " </a></td>
                </tr>";
            ?>
        <?php
        }
        ?>
    </tbody>
</table>


<?php
    include 'footer.php';
?>