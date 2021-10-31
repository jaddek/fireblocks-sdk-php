<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use App\Enum\Transactions\FeeLevels;
use Jaddek\Fireblocks\Http\Endpoint\TransactionsInterface;
use Jaddek\Fireblocks\Http\Query\QueryInterface;
use Jaddek\Fireblocks\Http\Request\Transactions\Transaction as CreateTransactionRequest;

final class TransactionsProvider extends Provider
{
    public function __construct(private TransactionsInterface $endpoint)
    {

    }

    public function getTransactions(QueryInterface $query = null): array
    {
        $response = $this->endpoint->getTransactions($query);

        return $response->toArray();
    }

    public function createTransaction(CreateTransactionRequest $transaction): array
    {
        $response = $this->endpoint->createTransaction($transaction);

        return $response->toArray();
    }

    public function getTransaction(string $txId): array
    {
        $response = $this->endpoint->retrieveTransaction($txId);

        return $response->toArray();
    }

    public function getTransactionByExternalId(string $externalTxId): array
    {
        $response = $this->endpoint->retrieveTransactionByExternalId($externalTxId);

        return $response->toArray();
    }

    public function cancelTransaction(string $txId): array
    {
        $response = $this->endpoint->cancelTransaction($txId);

        return $response->toArray();
    }

    public function dropTransaction(string $txId, ?string $feeLevel = null): array
    {
        if ($feeLevel !== null && in_array($feeLevel, FeeLevels::FEE_LEVELS)) {
            throw new \Exception('Invalid value for feeLevel');
        }

        $response = $this->endpoint->dropTransaction($txId, $feeLevel);

        return $response->toArray();
    }

    public function freezeTransaction(string $txId): array
    {
        $response = $this->endpoint->freezeTransaction($txId);

        return $response->toArray();
    }

    public function unFreezeTransaction(string $txId): array
    {
        $response = $this->endpoint->unFreezeTransaction($txId);

        return $response->toArray();
    }

    public function validateDestinationAddress(string $assetId, string $address): array
    {
        $response = $this->endpoint->validateDestinationAddress($assetId, $address);

        return $response->toArray();
    }

    public function getNetworkFee(string $assetId): array
    {
        $response = $this->endpoint->retrieveNetworkFee($assetId);

        return $response->toArray();
    }

    public function estimateTransactionFee(): array
    {
        $response = $this->endpoint->estimateTransactionFee();

        return $response->toArray();
    }

    public function setConfirmationThresholdByTxId(string $txId): array
    {
        $response = $this->endpoint->setConfirmationThresholdByTxId($txId);

        return $response->toArray();
    }

    public function setConfirmationThresholdByTxHash(string $txHash): array
    {
        $response = $this->endpoint->setConfirmationThresholdByTxHash($txHash);

        return $response->toArray();
    }
}