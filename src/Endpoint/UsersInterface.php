<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface UsersInterface
{
    public function getUsers(): ResponseInterface;
}