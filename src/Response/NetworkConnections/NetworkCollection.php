<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\NetworkConnections;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class NetworkCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return Network::class;
    }

    public static function getItemsKey(): string
    {
        return 'networks';
    }

}