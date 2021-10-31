<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class MaximumSpendableAmount implements ItemInterface
{
    public function __construct(private string $maxSpendableAmount)
    {

    }

    /**
     * @return string
     */
    public function getMaxSpendableAmount(): string
    {
        return $this->maxSpendableAmount;
    }
}