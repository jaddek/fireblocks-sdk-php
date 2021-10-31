<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\SupportedAssetsInterface;

final class SupportedAssetsProvider extends Provider
{
    public function __construct(private SupportedAssetsInterface $endpoint)
    {

    }

    public function getSupportedAssets(): array
    {
        $response = $this->endpoint->retrieveSupportedAssets();

        return $response->toArray();
    }
}