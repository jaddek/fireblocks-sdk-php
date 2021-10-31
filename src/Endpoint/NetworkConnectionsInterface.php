<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;


use Symfony\Contracts\HttpClient\ResponseInterface;

interface NetworkConnectionsInterface
{
    public function getNetworkConnections(): ResponseInterface;

    public function retrieveNetworkConnection(string $connectionId): ResponseInterface;
}