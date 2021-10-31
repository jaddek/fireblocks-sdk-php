<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\ExchangeAccounts\ExchangeInternalTransfer;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class ExchangeAccounts extends Endpoint implements ExchangeAccountsInterface
{
    public function getAccounts(): ResponseInterface
    {
        return $this->request('GET', '/v1/exchange_accounts');
    }

    public function retrieveAccount(string $exchangeAccountId): ResponseInterface
    {
        $url = strtr('/v1/exchange_accounts/{exchangeAccountId}', [
            '{exchangeAccountId}' => $exchangeAccountId,
        ]);

        return $this->request('GET', $url);
    }

    public function retrieveAsset(string $exchangeAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/exchange_accounts/{exchangeAccountId}/{assetId}', [
            '{exchangeAccountId}' => $exchangeAccountId,
            '{assetId}'           => $assetId,
        ]);

        return $this->request('GET', $url);
    }

    public function exchangeInternalTransfer(string $exchangeAccountId, ExchangeInternalTransfer $transfer): ResponseInterface
    {
        $url = strtr('/v1/exchange_accounts/{exchangeAccountId}/internal_transfer', [
            '{exchangeAccountId}' => $exchangeAccountId,
        ]);

        return $this->request('POST', $url, [
            'json' => $transfer
        ]);
    }
}