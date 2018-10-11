<?php

class User
{
    // properties
    private $username = "username";
    private $password = "password";
    private $email    = "chrisburn2009@hotmail.co.uk";


    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email    = $email;
    }

    // get methods
    public function get_username()
    {
        return $this->username;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function get_email()
    {
        return $this->email;
    }


    // set methods
    public function set_username($value)
    {
        $this->username = $value;
    }

    public function set_password($oldPassword, $newPassword)
    {
        if($oldPassword == $this->password)
        {
            $this->password = $newPassword;
        }
    }

    public function set_email($value)
    {
        $this->email = $value;
    }
}