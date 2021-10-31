<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\SupportedAssets\AssetCollection;

final class SupportedAssetsProviderHydrationDecorator extends Provider
{
    public function __construct(private SupportedAssetsProvider $provider)
    {

    }

    public function getSupportedAssets(): CollectionInterface|AssetCollection
    {
        return Hydrator::instance($this->provider->getSupportedAssets(), AssetCollection::class);
    }
}