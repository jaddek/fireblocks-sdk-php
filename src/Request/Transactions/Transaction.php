<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\Transactions;

use Jaddek\Fireblocks\Http\Request;

final class Transaction extends Request
{
    public function __construct(
        protected string                      $assetId,
        protected string                      $amount,
        protected TransferPeerPath            $source,
        protected DestinationTransferPeerPath $destination,
        protected bool                        $treatAsGrossAmount = false,
        protected ?string                     $fee = null,
        protected ?string                     $note = null,
        protected ?string                     $externalTxId = null,
        protected array                       $extraParameters = [],
        protected array                       $destinations = [],
    )
    {

    }

    public function jsonSerialize(): array
    {
        $data = parent::jsonSerialize();

        return array_filter($data, fn($value) => !empty($value));
    }
}