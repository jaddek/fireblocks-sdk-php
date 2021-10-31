<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\NetworkConnectionsInterface;

final class NetworkConnectionsProvider extends Provider
{
    public function __construct(private NetworkConnectionsInterface $endpoint)
    {

    }

    public function getNetworkConnections(): array
    {
        $response = $this->endpoint->getNetworkConnections();

        return $response->toArray();
    }

    public function getNetworkConnection(string $connectionId): array
    {
        $response = $this->endpoint->retrieveNetworkConnection($connectionId);

        return $response->toArray();
    }

}