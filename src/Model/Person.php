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
        string $cpf,
        string $birthDate,
        string $email,
        int $id=0
    )
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->birthDate = $birthDate;
        $this->email = $email;
    }
}