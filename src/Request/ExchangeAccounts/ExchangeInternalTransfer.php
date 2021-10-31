<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\ExchangeAccounts;

class ExchangeInternalTransfer implements \JsonSerializable
{
    public function __construct(
        private string $sourceType,
        private string $destType,
        private string $asset,
        private string $amount,
    ){

    }

    /**
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }

    /**
     * @return string
     */
    public function getDestType(): string
    {
        return $this->destType;
    }

    /**
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}