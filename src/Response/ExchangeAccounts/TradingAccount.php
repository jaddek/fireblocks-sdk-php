<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\ExchangeAccounts;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class TradingAccount implements ItemInterface
{
    public function __construct(
        private string $type,
        private AssetCollection $assets,
    )
    {
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return AssetCollection
     */
    public function getAssets(): AssetCollection
    {
        return $this->assets;
    }
}