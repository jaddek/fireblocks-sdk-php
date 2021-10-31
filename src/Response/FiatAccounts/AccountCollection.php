<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\FiatAccounts;

use Jaddek\Fireblocks\Http\Response\Collection;

final class AccountCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return Account::class;
    }

    public static function getItemsKey(): string
    {
        return 'accounts';
    }

}