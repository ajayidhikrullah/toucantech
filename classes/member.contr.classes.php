<?php
// Member class
class MemberContr extends Addmember{
    private $fullname;
    private $email;
    private $school;


    public function __construct($fullname, $email, $school){
        $this->fullname = $fullname;
        $this->email = $email;
        $this->school = $school;
        $this->setMember($this->fullname, $this->email, $this->school);


    }
// check for input
    public function inputError(){
        if ($this->emptyInput()){
            return true;
            exit();
        }

        if($this->invalidEmail() == false){
        }
    }

    //error handler to check for empty input
    private function emptyInput(){
        $result = false;
        if(empty($this->fullName) || empty($this->email) || empty($this->school)){
            $result = true;
        }
        return $result;
    }

    //error handler for invalid email
    private function invalidEmail(){
        $result;
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}