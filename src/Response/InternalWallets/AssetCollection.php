<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\InternalWallets;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class AssetCollection extends Collection
{
    /**
     * @return array<Asset>
     */
    #[Pure]
    public function getAssets(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return Asset::class;
    }

    public static function getItemsKey(): string
    {
        return 'assets';
    }

}