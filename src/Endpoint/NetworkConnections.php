<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

final class NetworkConnections extends Endpoint implements NetworkConnectionsInterface
{
    public function getNetworkConnections(): ResponseInterface
    {
        $url = '/v1/network_connections';

        return $this->request('GET', $url);
    }

    public function retrieveNetworkConnection(string $connectionId): ResponseInterface
    {
        $url = strtr('/v1/network_connections/{connectionId}', [
            '{connectionId}' => $connectionId,
        ]);

        return $this->request('GET', $url);
    }
}