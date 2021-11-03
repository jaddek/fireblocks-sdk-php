<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\ExternalWallets\Asset;
use Jaddek\Fireblocks\Http\Request\ExternalWallets\Wallet;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class ExternalWallets extends Endpoint implements ExternalWalletsInterface
{
    public function getWallets(): ResponseInterface
    {
        return $this->request('GET', '/v1/external_wallets');
    }

    public function createWallet(Wallet $wallet): ResponseInterface
    {
        return $this->request('POST', '/v1/external_wallets', [
            'json' => $wallet,
        ]);
    }

    public function retrieveWallet(string $walletId): ResponseInterface
    {
        $url = strtr('/v1/external_wallets/{walletId}', [
            '{walletId}' => $walletId,
        ]);

        return $this->request('GET', $url);
    }

    public function deleteWallet(string $walletId): ResponseInterface
    {
        $url = strtr('/v1/external_wallets/{walletId}', [
            '{walletId}' => $walletId,
        ]);

        return $this->request('DELETE', $url);
    }

    public function retrieveAsset(string $walletId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/external_wallets/{walletId}/{assetId}', [
            '{walletId}' => $walletId,
            '{assetId}'  => $assetId,
        ]);

        return $this->request('GET', $url);
    }

    public function addAsset(string $walletId, string $assetId, Asset $asset): ResponseInterface
    {
        $url = strtr('/v1/external_wallets/{walletId}/{assetId}', [
            '{walletId}' => $walletId,
            '{assetId}'  => $assetId,
        ]);

        return $this->request('POST', $url, [
            'json' => $asset
        ]);
    }

    public function deleteAsset(string $walletId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/external_wallets/{walletId}/{assetId}', [
            '{walletId}' => $walletId,
            '{assetId}'  => $assetId,
        ]);

        return $this->request('DELETE', $url);
    }

    public function setAmlCustomerRefId(string $walletId, string $customerRefId): ResponseInterface
    {
        $url = strtr('/v1/external_wallets/{walletId}/set_customer_ref_id', [
            '{walletId}' => $walletId,
        ]);

        return $this->request('POST', $url, [
            'json' => ['customerRefId' => $customerRefId],
        ]);
    }
}