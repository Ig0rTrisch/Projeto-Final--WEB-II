<?php

namespace APP\Model;



class Employee 
{
    private int $id;
    private string $name;
    private string $cpf;
    private string $birthDate;
    private string $email;
    private int $registration;
    private int $password;

    public function __construct(
        string $name,
        string $cpf,
        string $birthDate,
        string $email,
        int $registration,
        int $password,
        int $id=0
    )
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->birthDate = $birthDate;
        $this->email = $email;
        $this->registration = $registration;
        $this->password = $password;
    }
}

