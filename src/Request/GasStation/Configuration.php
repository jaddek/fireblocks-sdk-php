<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\GasStation;

class Configuration implements \JsonSerializable
{
    public function __construct(
        private string $gasThreshold,
        private string $gasCap,
        private string $maxGasPrice,
    )
    {

    }

    /**
     * @return string
     */
    public function getGasThreshold(): string
    {
        return $this->gasThreshold;
    }

    /**
     * @return string
     */
    public function getGasCap(): string
    {
        return $this->gasCap;
    }

    /**
     * @return string
     */
    public function getMaxGasPrice(): string
    {
        return $this->maxGasPrice;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}