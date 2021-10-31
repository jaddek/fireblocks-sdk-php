<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\InternalWallets;

class Asset implements \JsonSerializable
{
    public function __construct(
        private string $address,
        private string $tag,
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

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}