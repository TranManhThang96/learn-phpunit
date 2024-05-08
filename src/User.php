<?php

class User
{
    public $firstName;
    public $lastName;
    
    /**
     * getFullName
     *
     * @return void
     */
    public function getFullName()
    {
        return "$this->firstName $this->lastName";
    }
}
