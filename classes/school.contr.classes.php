<?php

class SchoolContr extends Addschool{
    private $school;
    /*
    * 

    */
    public function __construct($school){
        $this->school = $school;

    $this->setMember($this->school);
    }
}