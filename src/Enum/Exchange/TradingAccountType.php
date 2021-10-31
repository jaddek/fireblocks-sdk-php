<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Enum\Exchange;

interface TradingAccountType
{
    public const ACCOUNT_TYPE_SPOT                        = 'SPOT';
    public const ACCOUNT_TYPE_FUTURES                     = 'FUTURES';
    public const ACCOUNT_TYPE_MARGIN                      = 'MARGIN';
    public const ACCOUNT_TYPE_FUNDING                     = 'FUNDING';
    public const ACCOUNT_TYPE_OPTIONS                     = 'OPTIONS';
    public const ACCOUNT_TYPE_EXCHANGE                    = 'EXCHANGE';
    public const ACCOUNT_TYPE_COINED_MARGINED_SWAP        = 'COINED_MARGINED_SWAP';
    public const ACCOUNT_TYPE_USDT_FUTURES                = 'USDT_FUTURES';
    public const ACCOUNT_TYPE_COIN_FUTUTRES               = 'COIN_FUTURES';
    public const ACCOUNT_TYPE_USDT_ISOLATED_MARGINED_SWAP = 'USDT_ISOLATED_MARGINED_SWAP';
    public const ACCOUNT_TYPE_USDT_CROSS_MARGINED_SWAP    = 'USDT_CROSS_MARGINED_SWAP';
    public const ACCOUNT_TYPE_FUNDUBLE                    = 'FUNDUBLE';
}
