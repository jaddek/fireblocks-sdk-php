<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class AssetValueBalance implements ItemInterface
{
    public function __construct(
        private string $id,
        private float $total,
        private int $pending,
        private int $lockedAmount,
        private float $available,
        private int $frozen,
        private ?string $totalStakedCPU,
        private ?string $totalStakedNetwork,
        private ?string $selfStakedCPU,
        private ?string $selfStakedNetwork,
        private ?string $pendingRefundCPU,
        private ?string $pendingRefundNetwork,
        private string $blockHeight,
        private ?string $blockHash
    )
    {

    }

}