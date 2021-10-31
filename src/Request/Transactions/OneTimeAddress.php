<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\Transactions;

use Jaddek\Fireblocks\Http\Request;

final class OneTimeAddress extends Request
{
    public function __construct(
        protected string $address,
        protected string $tag,
    )
    {
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
}