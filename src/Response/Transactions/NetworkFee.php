<?php

declare(strict_types=1);

namespace App\Response\Transactions;

final class NetworkFee
{
    public function __construct(
        private Fee $low,
        private Fee $medium,
        private Fee $high,
    )
    {

    }

    /**
     * @return Fee
     */
    public function getLow(): Fee
    {
        return $this->low;
    }

    /**
     * @return Fee
     */
    public function getMedium(): Fee
    {
        return $this->medium;
    }

    /**
     * @return Fee
     */
    public function getHigh(): Fee
    {
        return $this->high;
    }
}