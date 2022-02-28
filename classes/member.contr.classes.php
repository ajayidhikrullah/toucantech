<?php
// Member class
class MemberContr extends Addmember{
    private $fullname;
    private $email;
    private $school;

    /*

    */

    public function __construct($fullname, $email, $school){
        $this->fullname = $fullname;
        $this->email = $email;
        $this->school = $school;

    $this->setMember($this->fullname, $this->email, $this->school);
    }
}