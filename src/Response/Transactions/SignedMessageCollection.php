<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\Collection;

final class SignedMessageCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return SignedMessage::class;
    }

    public static function getItemsKey(): string
    {
        return 'signedMessages';
    }
}
