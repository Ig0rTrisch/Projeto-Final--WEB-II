<?php

namespace APP\Model;

class Address
{
    private string $publicPlace;
    private string $streetName;
    private string $neighborhood;
    private string $complement;
    private int $numberOfAddress;
    private int $zipCode;

    public function __construct(
        string $publicPlace,
        string $streetName,
        string $neighborhood,
        string $complement,
        int $numberOfAddress,
        int $zipCode
    )   
    {
        $this->publicPlace = $publicPlace;
        $this->streetName = $streetName;
        $this->neighborhood = $neighborhood;
        $this->complement = $complement;
        $this->numberOfAddress = $numberOfAddress;
        $this->zipCode = $zipCode;
    }
}