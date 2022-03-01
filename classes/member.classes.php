<?php
session_start();
class Addmember extends Dbh{
    /*
        *
        *Member classes handles the save into members table and return error message or success message
        *
    */
    protected function setMember($fullname, $email, $school){
        $stmt = $this->connect()->prepare('INSERT INTO members_tb (fullName, email, schools_id) VALUES (?, ?, ?);');
        // var_dump($stmt);exist();

        if(!$stmt->execute(array($fullname, $email, $school))){
            $stmt = null;
            $_SESSION['status'] = "<div class='btn btn-danger'>Member cannot be added</div>";
            header('Location: ../viewschools.php');
            // echo 'Wrong submission...';
            $stmt = null;
            exit();
        } else{
            $_SESSION['status'] = "<div class='btn btn-success'>Member Added successfully</div>";
            header('Location: ../viewschools.php');
        $stmt = null;
        }
    }
}