<?php

    if (isset($_POST['add_school'])) {
        # code...
        $school = $_POST['school'];

        include "../classes/config.classes.php";
        include '../classes/school.classes.php';
        include '../classes/school.contr.classes.php';
        $addSchool = new SchoolContr($school);

    }
?>
