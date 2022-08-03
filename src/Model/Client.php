<?php

namespace APP\Model;



class Client
{
    private int $id;
    private string $login;
    private string $password;
    
    public function __construct(
        string $login,
        string $password,
        int $id=0
    )
    {
        $this->login = $login;
        $this->passoword = $password;
    }
}