<?php
session_start();

class Addmember extends Dbh{
    protected function setMember($fullName, $email, $school){
        $stmt = $this->connect()->prepare('INSERT INTO members_tb (fullName, email, schools_id) VALUES (?, ?, ?);');
        if(!$stmt->execute(array($fullName, $email, $school))){
            $stmt = null;
            $_SESSION['status'] = 'Member cannot be added';
            header('Location: index.php');
            // echo 'Wrong submission...';
            exit();
        } else{
            $_SESSION['status'] = 'Member Added successfully';
            header('Location: index.php');
        }
        $stmt = null;

    }
}