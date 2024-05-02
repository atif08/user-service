<?php

namespace App\Repository;

use Psr\Log\LoggerInterface;

class UserRepository
{
    public function __construct(private readonly LoggerInterface $logger)
    {

    }

    public function saveUser($data): void
    {
        $this->logger->info('User created', ['data' => $data]);

    }

}