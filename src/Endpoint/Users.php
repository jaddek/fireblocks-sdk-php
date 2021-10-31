<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

final class Users extends Endpoint implements UsersInterface
{
    public function getUsers(): ResponseInterface
    {
        $url = '/v1/users';

        return $this->request('GET', $url);
    }
}