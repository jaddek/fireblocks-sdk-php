<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Query\QueryInterface;
use Jaddek\Fireblocks\Http\Request\Transactions\Transaction as CreateTransactionRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class Transactions extends Endpoint implements TransactionsInterface
{
    public function getTransactions(?QueryInterface $query = null): ResponseInterface
    {
        $url = '/v1/transactions';

        $options = [];

        if ($query instanceof QueryInterface) {
            $options['query'] = $query->toArray();
        }

        return $this->request('GET', $url, $options);
    }

    public function createTransaction(CreateTransactionRequest $transaction): ResponseInterface
    {
        $url = '/v1/transactions';

        return $this->request('POST', $url, [
            'json' => $transaction
        ]);
    }

    public function retrieveTransaction(string $txId): ResponseInterface
    {
        $url = strtr('/v1/transactions/{txId}', [
            '{txId}' => $txId,
        ]);

        return $this->request('GET', $url);
    }

    public function retrieveTransactionByExternalId(string $externalTxId): ResponseInterface
    {
        $url = strtr('/v1/transactions/external_tx_id/{externalTxId}', [
            'externalTxId' => $externalTxId,
        ]);

        return $this->request('GET', $url);
    }

    public function cancelTransaction(string $txId): ResponseInterface
    {
        $url = strtr('/v1/transactions/{txId}/cancel', [
            '{txId}' => $txId,
        ]);

        return $this->request('POST', $url);
    }

    public function dropTransaction(string $txId, ?string $feeLevel = null): ResponseInterface
    {
        $url = strtr('/v1/transactions/{txId}/drop', [
            '{txId}' => $txId,
        ]);

        $options = [];

        if ($feeLevel) {
            $options = [
                'json' => ['feeLevel' => $feeLevel]
            ];
        }

        return $this->request('POST', $url, $options);
    }

    public function freezeTransaction(string $txId): ResponseInterface
    {
        $url = strtr('/v1/transactions/{txId}/freeze', [
            '{txId}' => $txId,
        ]);

        return $this->request('POST', $url);
    }

    public function unFreezeTransaction(string $txId): ResponseInterface
    {
        $url = strtr('/v1/transactions/{txId}/unfreeze', [
            '{txId}' => $txId,
        ]);

        return $this->request('POST', $url);
    }

    public function validateDestinationAddress(string $assetId, string $address): ResponseInterface
    {
        $url = strtr('/v1/transactions/validate_address/{assetId}/{address}', [
            '{assetId}' => $assetId,
            '{address}' => $address
        ]);

        return $this->request('GET', $url);
    }

    public function retrieveNetworkFee(string $assetId): ResponseInterface
    {
        $url = '/v1/estimate_network_fee';

        return $this->request('GET', $url, [
            'query' => ['assetId' => $assetId]
        ]);
    }

    public function estimateTransactionFee(): ResponseInterface
    {
        $url = '/v1/transactions/estimate_fee';

        return $this->request('POST', $url);
    }

    public function setConfirmationThresholdByTxId(string $txId): ResponseInterface
    {
        $url = strtr('/v1/transactions/{txId}/set_confirmation_threshold', [
            '{txId}' => $txId,
        ]);

        return $this->request('POST', $url);
    }

    public function setConfirmationThresholdByTxHash(string $txHash): ResponseInterface
    {
        $url = strtr('/v1/txHash/{txHash}/set_confirmation_threshold', [
            '{txHash}' => $txHash,
        ]);

        return $this->request('POST', $url);
    }
}