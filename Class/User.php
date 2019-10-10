<?php


class User
{
    private $myPseudo;
    private $myEmail;
    private $myPassword;
    private $myGender;

    public function __construct($pseudo, $email, $password, $gender)
    {
        $this->myPseudo = $pseudo;
        $this->myEmail = $email;
        $this->myPassword = $password;
        $this->myGender = $gender;
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