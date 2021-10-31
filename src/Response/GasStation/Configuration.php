<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\GasStation;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Configuration implements ItemInterface
{
    public function __construct(
        private ?string $gasThreshold,
        private ?string $gasCap,
        private ?string $maxGasPrice,
    )
    {
    }

    /**
     * @return string|null
     */
    public function getGasThreshold(): ?string
    {
        return $this->gasThreshold;
    }

    /**
     * @return string|null
     */
    public function getGasCap(): ?string
    {
        return $this->gasCap;
    }

    /**
     * @return string|null
     */
    public function getMaxGasPrice(): ?string
    {
        return $this->maxGasPrice;
    }
}