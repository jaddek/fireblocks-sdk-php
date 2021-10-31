<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\ExternalWallets;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class WalletCollection extends Collection
{
    /**
     * @return array<Wallet>
     */
    #[Pure]
    public function getAssets(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return Wallet::class;
    }

    public static function getItemsKey(): string
    {
        return 'wallets';
    }

}