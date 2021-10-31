<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\Collection;

final class TransactionCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return Transaction::class;
    }

    public static function getItemsKey(): string
    {
        return 'transactions';
    }
}