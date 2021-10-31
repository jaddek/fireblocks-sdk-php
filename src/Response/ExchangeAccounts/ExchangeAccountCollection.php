<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\ExchangeAccounts;

use Jaddek\Fireblocks\Http\Response\Collection;
use JetBrains\PhpStorm\Pure;

final class ExchangeAccountCollection extends Collection
{
    /**
     * @return array<ExchangeAccount>
     */
    #[Pure]
    public function getExchangeAccounts(): array
    {
        return $this->getCollection();
    }

    public static function getSupportedItem(): string
    {
        return ExchangeAccount::class;
    }

    public static function getItemsKey(): string
    {
        return 'accounts';
    }


}