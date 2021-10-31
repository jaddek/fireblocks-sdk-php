<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\ExchangeAccounts;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Asset implements ItemInterface
{
    public function __construct(
        private string $id,
        private string $total,
        private string $balance,
        private string $lockedAmount,
        private string $available,
    )
    {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }

    /**
     * @return string
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getLockedAmount(): string
    {
        return $this->lockedAmount;
    }

    /**
     * @return string
     */
    public function getAvailable(): string
    {
        return $this->available;
    }
}