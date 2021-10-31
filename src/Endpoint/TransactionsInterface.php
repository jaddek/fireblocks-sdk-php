<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Query\QueryInterface;
use Jaddek\Fireblocks\Http\Request\Transactions\Transaction as CreateTransactionRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface TransactionsInterface
{
    public function getTransactions(?QueryInterface $query = null): ResponseInterface;

    public function createTransaction(CreateTransactionRequest $transaction): ResponseInterface;

    public function retrieveTransaction(string $txId): ResponseInterface;

    public function retrieveTransactionByExternalId(string $externalTxId): ResponseInterface;

    public function cancelTransaction(string $txId): ResponseInterface;

    public function dropTransaction(string $txId, ?string $feeLevel = null): ResponseInterface;

    public function freezeTransaction(string $txId): ResponseInterface;

    public function unFreezeTransaction(string $txId): ResponseInterface;

    public function validateDestinationAddress(string $assetId, string $address): ResponseInterface;

    public function retrieveNetworkFee(string $assetId): ResponseInterface;

    public function estimateTransactionFee(): ResponseInterface;

    public function setConfirmationThresholdByTxId(string $txId): ResponseInterface;

    public function setConfirmationThresholdByTxHash(string $txHash): ResponseInterface;
}