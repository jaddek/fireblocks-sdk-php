<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Users;

use Jaddek\Fireblocks\Http\Response\Collection;

final class UserCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return User::class;
    }

    public static function getItemsKey(): string
    {
        return 'users';
    }
}