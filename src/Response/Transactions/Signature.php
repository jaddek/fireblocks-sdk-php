<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Signature implements ItemInterface
{
    public function __construct(
        private string $r,
        private string $s,
        private int $v,
    )
    {
    }

    /**
     * @return string
     */
    public function getR(): string
    {
        return $this->r;
    }

    /**
     * @return string
     */
    public function getS(): string
    {
        return $this->s;
    }

    /**
     * @return int
     */
    public function getV(): int
    {
        return $this->v;
    }
}
