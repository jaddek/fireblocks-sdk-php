<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\UsersInterface;

final class UsersProvider extends Provider
{
    public function __construct(private UsersInterface $endpoint)
    {

    }

    public function getUsers(): array
    {
        $response = $this->endpoint->getUsers();

        return $response->toArray();
    }
}