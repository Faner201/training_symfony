<?php

namespace App\Shared\Damain\Service;

use Symfony\Component\Uid\Ulid;

class UlidService
{
    public static  function generate(): string
    {
        return Ulid::generate();
    }
}