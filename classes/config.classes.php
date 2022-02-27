<?php

class Dbh{
    private $dbServerName = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "toucantech_db";

    protected function connect(){
        $dbCon = 'mysql:host=' . $this->dbServerName . ';dbname=' . $this->dbName;
        $pdo = new PDO($dbCon, $this->dbUsername, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}


?>