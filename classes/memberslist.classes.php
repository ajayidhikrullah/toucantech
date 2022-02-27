<?php
    include 'config.classes.php';
    Class Fetchmembers extends Dbh{
        public function getMembers(){
            $sql = "SELECT * FROM members_tb ORDER BY `schools_id` DESC;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $members = $stmt->fetchAll();
            // var_dump($schools);exit();
            return $members;
        }
    }


    ?>