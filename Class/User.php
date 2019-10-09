<?php


class User
{
    private $myPseudo;
    private $myEmail;
    private $myPassword;
    private $myGender;

    public function __construct($pseudo, $email, $password, $gender)
    {
        $myPseudo = $pseudo;
        $myEmail = $email;
        $myPassword = $password;
        $myGender = $gender;
    }

    public function getMyPseudo ()
    {
        return $this->myPseudo;
    }

    public function getMyEmail ()
    {
        return $this->myEmail;
    }

    public function getMyPassword ()
    {
        return $this->myPassword;
    }

    public function getMyGender ()
    {
        return $this->myGender;
    }

    public function setMyPseudo($pseudo)
    {
        $this->myPseudo = $pseudo;
    }

    public function setMyEmail($email)
    {
        $this->myEmail = $email;
    }

    public function setMyPassword($password)
    {
        $this->myPassword = $password;
    }

    public function setMyGender($gender)
    {
        $this->myGender = $gender;
    }

}