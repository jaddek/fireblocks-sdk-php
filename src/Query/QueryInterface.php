<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Query;

interface QueryInterface
{
    public function toArray(): array;
}