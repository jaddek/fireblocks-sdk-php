<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http;

interface Fireblocks
{
    public const HOST_API        = 'https://api.fireblocks.io';
    public const DEFAULT_HEADERS = [
        'Content-Type' => 'application/json'
    ];
}