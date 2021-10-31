<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Input implements ItemInterface
{
    public function __construct(
        private string $txHash,
        private int $index,
    )
    {

    }

    /**
     * @return string
     */
    public function getTxHash(): string
    {
        return $this->txHash;
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }
}