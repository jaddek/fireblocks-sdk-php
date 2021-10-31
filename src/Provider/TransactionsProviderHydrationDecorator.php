<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use App\Response\Transactions\AddressStatus;
use Jaddek\Fireblocks\Http\Endpoint\TransactionsInterface;
use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Query\QueryInterface;
use Jaddek\Fireblocks\Http\Request\Transactions\Transaction as CreateTransactionRequest;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Response\Transactions\Transaction;
use Jaddek\Fireblocks\Http\Response\Transactions\TransactionCollection;
use Jaddek\Fireblocks\Http\Response\Users\UserCollection;

final class TransactionsProviderHydrationDecorator
{
    public function __construct(private TransactionsProvider $provider)
    {

    }

    public function getTransactions(?QueryInterface $query = null): TransactionCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getTransactions($query), TransactionCollection::class);
    }

    public function createTransaction(CreateTransactionRequest $transaction): array
    {
        return $this->provider->createTransaction($transaction);
    }

    public function getTransaction(string $txId): ItemInterface|Transaction
    {
        return Hydrator::instance($this->provider->getTransaction($txId), Transaction::class);

    }

    public function getTransactionByExternalId(string $externalTxId): ItemInterface|Transaction
    {
        return Hydrator::instance($this->provider->getTransactionByExternalId($externalTxId), Transaction::class);
    }

    public function cancelTransaction(string $txId): array
    {
        return $this->provider->cancelTransaction($txId);
    }

    public function dropTransaction(string $txId, ?string $feeLevel = null): array
    {
        return $this->provider->dropTransaction($txId, $feeLevel);
    }

    public function freezeTransaction(string $txId): array
    {
        return $this->provider->freezeTransaction($txId);
    }

    public function unFreezeTransaction(string $txId): array
    {
        return $this->provider->unFreezeTransaction($txId);
    }

    public function validateDestinationAddress(string $assetId, string $address): AddressStatus|ItemInterface
    {
        return Hydrator::instance($this->provider->validateDestinationAddress($assetId, $address), AddressStatus::class);
    }

    public function getNetworkFee(string $assetId): array
    {
        return Hydrator::instance($this->provider->getNetworkFee($assetId), AddressStatus::class);
    }

    public function estimateTransactionFee(): array
    {
        return $this->provider->estimateTransactionFee();
    }

    public function setConfirmationThresholdByTxId(string $txId): array
    {
        return $this->provider->setConfirmationThresholdByTxId($txId);
    }

    public function setConfirmationThresholdByTxHash(string $txHash): array
    {
        return $this->provider->setConfirmationThresholdByTxHash($txHash);
    }
}