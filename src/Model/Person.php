<?php

namespace APP\Model;

class Person
{
    protected string $name;
    protected int $cpf;
    protected string $birthDate;
    protected string $email;
    

    public function __construct(
        string $name,
        int $cpf,
        string $birthDate,
        string $email
    )
    {
        
    }
}