<?php


class User
{
    private $b_myAdmin;
    private $s_myPseudo;
    private $s_myEmail;
    private $s_myPassword;
    private $s_myGender;

    public function __construct($admin, $pseudo, $email, $password, $gender)
    {
        $this->b_myAdmin = $this->b_myAdmin;
        $this->s_myPseudo = $pseudo;
        $this->s_myEmail = $email;
        $this->s_myPassword = $password;
        $this->s_myGender = $gender;
    }


    public function getMyAdmin()
    {
        return $this->b_myAdmin;
    }

    public function getMyPseudo ()
    {
        return $this->s_myPseudo;
    }

    public function getMyEmail ()
    {
        return $this->s_myEmail;
    }

    public function getMyPassword ()
    {
        return $this->s_myPassword;
    }

    public function getMyGender ()
    {
        return $this->s_myGender;
    }

    public function setMyPseudo($pseudo)
    {
        $this->s_myPseudo = $pseudo;
    }

    public function setMyEmail($email)
    {
        $this->s_myEmail = $email;
    }

    public function setMyPassword($password)
    {
        $this->s_myPassword = $password;
    }

    public function setMyGender($gender)
    {
        $this->s_myGender = $gender;
    }

    public function setMyAdmin($b_myAdmin)
    {
        $this->b_myAdmin = $b_myAdmin;
    }

}