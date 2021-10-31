<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Transaction implements ItemInterface
{
    public function __construct(
        private string                    $id,
        private string                    $assetId,
        private Source                    $source,
        private Destination               $destination,
        private AmountInfo                $amountInfo,
        private ?bool                     $treatAsGrossAmount,
        private FeeInfo                   $feeInfo,
        private float                     $requestedAmount,
        private float                     $amount,
        private float                     $netAmount,
        private ?float                    $amountUSD,
        private ?int                      $serviceFee,
        private ?float                    $networkFee,
        private int                       $createdAt,
        private int                       $lastUpdated,
        private string                    $status,
        private string                    $txHash,
        private ?int                      $index,
        private ?string                   $tag,
        private string                    $subStatus,
        private string                    $sourceAddress,
        private string                    $destinationAddress,
        private string                    $destinationAddressDescription,
        private string                    $destinationTag,
        private array                     $signedBy,
        private string                    $createdBy,
        private string                    $rejectedBy,
        private string                    $addressType,
        private string                    $note,
        private string                    $exchangeTxId,
        private string                    $feeCurrency,
        private string                    $operation,
        private ?NetworkRecordsCollection $networkRecords,
        private ?AmlScreeningResult       $amlScreeningResult,
        private ?string                   $customerRefId,
        private ?int                      $numOfConfirmations,
        private SignedMessageCollection   $signedMessages,
        private ?string                   $replacedTxHash,
        private ?string                   $externalTxId,
        private ?AuthorizationInfo        $authorizationInfo,
        private ?array                    $extraParameters,
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
    public function getAssetId(): string
    {
        return $this->assetId;
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
     * @return AmountInfo
     */
    public function getAmountInfo(): AmountInfo
    {
        return $this->amountInfo;
    }

    /**
     * @return bool|null
     */
    public function getTreatAsGrossAmount(): ?bool
    {
        return $this->treatAsGrossAmount;
    }

    /**
     * @return FeeInfo
     */
    public function getFeeInfo(): FeeInfo
    {
        return $this->feeInfo;
    }

    /**
     * @return float
     */
    public function getRequestedAmount(): float
    {
        return $this->requestedAmount;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getNetAmount(): float
    {
        return $this->netAmount;
    }

    /**
     * @return float|null
     */
    public function getAmountUSD(): ?float
    {
        return $this->amountUSD;
    }

    /**
     * @return int|null
     */
    public function getServiceFee(): ?int
    {
        return $this->serviceFee;
    }

    /**
     * @return float|null
     */
    public function getNetworkFee(): ?float
    {
        return $this->networkFee;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @return int
     */
    public function getLastUpdated(): int
    {
        return $this->lastUpdated;
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
    public function getTxHash(): string
    {
        return $this->txHash;
    }

    /**
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }

    /**
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @return string
     */
    public function getSubStatus(): string
    {
        return $this->subStatus;
    }

    /**
     * @return string
     */
    public function getSourceAddress(): string
    {
        return $this->sourceAddress;
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
    public function getDestinationAddressDescription(): string
    {
        return $this->destinationAddressDescription;
    }

    /**
     * @return string
     */
    public function getDestinationTag(): string
    {
        return $this->destinationTag;
    }

    /**
     * @return array
     */
    public function getSignedBy(): array
    {
        return $this->signedBy;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    /**
     * @return string
     */
    public function getRejectedBy(): string
    {
        return $this->rejectedBy;
    }

    /**
     * @return string
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @return string
     */
    public function getExchangeTxId(): string
    {
        return $this->exchangeTxId;
    }

    /**
     * @return string
     */
    public function getFeeCurrency(): string
    {
        return $this->feeCurrency;
    }

    /**
     * @return string
     */
    public function getOperation(): string
    {
        return $this->operation;
    }

    /**
     * @return NetworkRecordsCollection|null
     */
    public function getNetworkRecords(): ?NetworkRecordsCollection
    {
        return $this->networkRecords;
    }

    /**
     * @return AmlScreeningResult|null
     */
    public function getAmlScreeningResult(): ?AmlScreeningResult
    {
        return $this->amlScreeningResult;
    }

    /**
     * @return string|null
     */
    public function getCustomerRefId(): ?string
    {
        return $this->customerRefId;
    }

    /**
     * @return int|null
     */
    public function getNumOfConfirmations(): ?int
    {
        return $this->numOfConfirmations;
    }

    /**
     * @return SignedMessageCollection
     */
    public function getSignedMessages(): SignedMessageCollection
    {
        return $this->signedMessages;
    }

    /**
     * @return string|null
     */
    public function getReplacedTxHash(): ?string
    {
        return $this->replacedTxHash;
    }

    /**
     * @return string|null
     */
    public function getExternalTxId(): ?string
    {
        return $this->externalTxId;
    }

    /**
     * @return AuthorizationInfo|null
     */
    public function getAuthorizationInfo(): ?AuthorizationInfo
    {
        return $this->authorizationInfo;
    }

    /**
     * @return array|null
     */
    public function getExtraParameters(): ?array
    {
        return $this->extraParameters;
    }
}