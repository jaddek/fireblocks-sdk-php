<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\SmartTransfers;

use Jaddek\Fireblocks\Http\Response\Collection;

final class TermCollection extends Collection
{
    public static function getSupportedItem(): string
    {
        return Term::class;
    }

    public static function getItemsKey(): string
    {
        return 'terms';
    }
}