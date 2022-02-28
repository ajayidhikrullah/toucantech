<?php
    include 'config.classes.php';
    Class Fetchmembers extends Dbh{
        public function getMembers(){
            $id = $_GET['id'];
            // $sql = "SELECT * FROM members_tb ORDER BY `id` DESC;";
            // $sql = "SELECT * FROM members_tb;";
            $sql = "SELECT id, fullName, email, schools_id FROM members_tb WHERE schools_id = $id";
            // var_dump($id);

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $members = $stmt->fetchAll();
            // var_dump($schools);exit();
            return $members;
        }
    }


    ?>