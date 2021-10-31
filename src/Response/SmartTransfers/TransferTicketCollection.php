<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\SmartTransfers;

use Jaddek\Fireblocks\Http\Response\Collection;

final class TransferTicketCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return TransferTicket::class;
    }

    public static function getItemsKey(): string
    {
        return 'ticktes';
    }

}