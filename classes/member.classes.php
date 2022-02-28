<?php
session_start();
class Addmember extends Dbh{
    /*
        *
        *
        *
    */
    protected function setMember($fullname, $email, $school){
        $stmt = $this->connect()->prepare('INSERT INTO members_tb (fullName, email, schools_id) VALUES (?, ?, ?);');
        // var_dump($stmt);exist();

        if(!$stmt->execute(array($fullname, $email, $school))){
            $stmt = null;
            $_SESSION['status'] = 'Member cannot be added';
            header('Location: ../index.php');
            // echo 'Wrong submission...';
            $stmt = null;
            exit();
        } else{
            $_SESSION['status'] = 'Member Added successfully';
            header('Location: ../index.php');
        $stmt = null;
        }
    }
}