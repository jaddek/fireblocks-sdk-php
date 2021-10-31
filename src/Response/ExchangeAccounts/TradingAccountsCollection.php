<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\ExchangeAccounts;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class TradingAccountsCollection extends Collection
{
    /**
     * @return array<TradingAccount>
     */
    #[Pure]
    public function getExchangeAccounts(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return TradingAccount::class;
    }

    public static function getItemsKey(): string
    {
        return 'tradingAccounts';
    }


}