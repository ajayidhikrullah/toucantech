<?php
    include 'config.classes.php';
    Class Fetchmembers extends Dbh{
    /**
     * Gets the members for a sepcific school (using the school id)
    */
        public function getMembers(){
            $id = $_GET['id'];
            $sql = "SELECT id, fullName, email, schools_id FROM members_tb WHERE schools_id = $id";
            // var_dump($id);

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $members = $stmt->fetchAll();
            return $members;
        }
    }


    ?>