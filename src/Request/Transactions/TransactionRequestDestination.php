<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\Transactions;

use Jaddek\Fireblocks\Http\JsonTrait;

class TransactionRequestDestination implements \JsonSerializable
{
    use JsonTrait;

    public function __construct(
        private string                      $amount,
        private DestinationTransferPeerPath $destination,
    )
    {
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @return DestinationTransferPeerPath
     */
    public function getDestination(): DestinationTransferPeerPath
    {
        return $this->destination;
    }
}