<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Query\Transactions;

use Jaddek\Fireblocks\Http\Query\QueryInterface;

class GetTransactionsQuery implements QueryInterface
{
    public function __construct(
        private ?string $before = null,
        private ?string $after = null,
        private ?string $status = null,
        private ?string $orderBy = null,
        private ?string $sourceType = null,
        private ?string $sourceId = null,
        private ?string $destType = null,
        private ?string $destId = null,
        private ?string $assets = null,
        private ?string $txHash = null,
        private ?string $limit = null,
    )
    {
    }
    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter(get_object_vars($this), fn($value) => $value !== null);
    }
}