<?php

namespace Blue;

class User
{
    private $name;

    private $emailAddress;

    public function __construct($name, $emailAddress)
    {
        $this->name = $name;
        $this->emailAddress = $emailAddress;
    }
}