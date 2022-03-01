<?php
/*
* Check the submit button if click, post the fields
* 
*/
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $school = $_POST['school'];
// var_dump('ggg');exit();
// include other necessary classes
include "../classes/config.classes.php"; //database connection
include '../classes/member.classes.php';
include '../classes/member.contr.classes.php';

/*
lets instantiate the Controller class for Adding new Member with list of emails, full name and email
*/
$addmember = new Addmember();
$addmember = new MemberContr($fullname, $email, $school);

}