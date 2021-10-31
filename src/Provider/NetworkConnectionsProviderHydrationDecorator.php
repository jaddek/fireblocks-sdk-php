<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\InternalWallets\Asset;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Response\NetworkConnections\Network;
use Jaddek\Fireblocks\Http\Response\NetworkConnections\NetworkCollection;

final class NetworkConnectionsProviderHydrationDecorator extends Provider
{
    public function __construct(private NetworkConnectionsProvider $provider)
    {

    }

    public function getNetworkConnections(): NetworkCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getNetworkConnections(), NetworkCollection::class);
    }

    public function getNetworkConnection(string $connectionId): ItemInterface|Network
    {
        return Hydrator::instance($this->provider->getNetworkConnection($connectionId), Network::class);
    }
}