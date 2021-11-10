<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Fee implements ItemInterface
{
    public function __construct(
        private string $feePerByte,
        private string $gasPrice,
        private string $networkFee,
    )
    {

    }

    /**
     * @return string
     */
    public function getFeePerByte(): string
    {
        return $this->feePerByte;
    }

    /**
     * @return string
     */
    public function getGasPrice(): string
    {
        return $this->gasPrice;
    }

    /**
     * @return string
     */
    public function getNetworkFee(): string
    {
        return $this->networkFee;
    }
}