<?php

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $school = $_POST['school'];
// var_dump('ggg');exit();
// include other necessary classes
include "../classes/config.classes.php";
include '../classes/member.classes.php';
include '../classes/member_contr.classes.php';

    // lets instantiate
// $addmember = new Addmember();

$addmember = new MemberContr($fullname, $email, $school);

}