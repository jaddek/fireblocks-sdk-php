<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class NetworkRecords implements ItemInterface
{
    public function __construct(
        private Source      $source,
        private Destination $destination,
        private string      $thHash,
        private string      $networkFee,
        private string      $assetId,
        private string      $netAmount,
        private string      $status,
        private string      $type,
        private string      $destinationAddress,
        private string      $sourceAddress,
    )
    {

    }

    /**
     * @return Source
     */
    public function getSource(): Source
    {
        return $this->source;
    }

    /**
     * @return Destination
     */
    public function getDestination(): Destination
    {
        return $this->destination;
    }

    /**
     * @return string
     */
    public function getThHash(): string
    {
        return $this->thHash;
    }

    /**
     * @return string
     */
    public function getNetworkFee(): string
    {
        return $this->networkFee;
    }

    /**
     * @return string
     */
    public function getAssetId(): string
    {
        return $this->assetId;
    }

    /**
     * @return string
     */
    public function getNetAmount(): string
    {
        return $this->netAmount;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDestinationAddress(): string
    {
        return $this->destinationAddress;
    }

    /**
     * @return string
     */
    public function getSourceAddress(): string
    {
        return $this->sourceAddress;
    }
}