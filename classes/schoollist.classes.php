
<?php
    include 'config.classes.php';
    /**
     * Gets the list of all schools
     * 
     */
       Class Fetchschool extends Dbh{
        public function getSchools(){
            $sql = "SELECT * FROM schools_tb ORDER BY `id` DESC;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $schools = $stmt->fetchAll();
            // var_dump($schools);exit();
            return $schools;
        }
    }


    ?>