<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class AssetBalance implements ItemInterface
{
    public function __construct(
        private string $id,
        private string $total,
        private string $balance,
        private string $lockedAmount,
        private string $available,
        private string $pending,
        private string $frozen,
        private string $staked,
        private string $blockHeight,
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

    /**
     * @return string
     */
    public function getPending(): string
    {
        return $this->pending;
    }

    /**
     * @return string
     */
    public function getFrozen(): string
    {
        return $this->frozen;
    }

    /**
     * @return string
     */
    public function getStaked(): string
    {
        return $this->staked;
    }

    /**
     * @return string
     */
    public function getBlockHeight(): string
    {
        return $this->blockHeight;
    }
}