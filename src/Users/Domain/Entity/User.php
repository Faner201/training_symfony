<?php

namespace App\Users\Domain\Entity;

use App\Shared\Damain\Service\UlidService;

class User
{
    private string $id;
    private string $email;
    private string $password;

    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->id = UlidService::generate();
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}