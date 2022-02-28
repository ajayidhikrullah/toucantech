<?php
session_start();

class Addschool extends Dbh{
    /*
    * Post the members for school
    * save in database
    */
    protected function setMember($school){
        $stmt = $this->connect()->prepare('INSERT INTO schools_tb (`name`) VALUES (?);');
        // var_dump($stmt);exist();
        if(!$stmt->execute(array($school))){
            $stmt = null;
            $_SESSION['status'] = 'Sorry, School cannot be added, try again!';
            header('Location: ../index.php');
            // echo 'Wrong submission...';
            $stmt = null;
            exit();
        } else{
            $_SESSION['status'] = 'Bravo! School added successfully';
            header('Location: ../index.php');
        $stmt = null;
        }

    }
}