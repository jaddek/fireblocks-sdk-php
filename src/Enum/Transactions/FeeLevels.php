<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http;

interface FeeLevels
{
    public const FEE_LEVEL_LOW = 'LOW';
    public const FEE_LEVEL_MEDIUM = 'MEDIUM';
    public const FEE_LEVEL_HIGH = 'HIGH';

    public const FEE_LEVELS = [
        self::FEE_LEVEL_HIGH,
        self::FEE_LEVEL_LOW,
        self::FEE_LEVEL_MEDIUM
    ];
}
