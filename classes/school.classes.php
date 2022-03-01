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
            $_SESSION['status'] = "<div class='btn btn-danger'>Sorry, School cannot be added, try again!</div>";
            header('Location: ../member.php');
            // echo 'Wrong submission...';
            $stmt = null;
            exit();
        } else{
            $_SESSION['status'] = "<div class='btn btn-success'>Bravo! School added successfully</div>";
            header('Location: ../member.php');
        $stmt = null;
        }

    }
}