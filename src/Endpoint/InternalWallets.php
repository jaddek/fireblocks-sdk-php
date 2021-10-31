<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\InternalWallets\Asset;
use Jaddek\Fireblocks\Http\Request\InternalWallets\Wallet;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class InternalWallets extends Endpoint implements InternalWalletsInterface
{
    public function getWallets(): ResponseInterface
    {
        $url = '/v1/internal_wallets';

        return $this->request('GET', $url);
    }

    public function createWallet(Wallet $wallet): ResponseInterface
    {
        $url = '/v1/internal_wallets';

        return $this->request('POST', $url, [
            'json' => $wallet,
        ]);
    }

    public function retrieveWallet(string $walletId): ResponseInterface
    {
        $url = strtr('/v1/internal_wallets/{walletId}', [
            '{walletId}' => $walletId,
        ]);

        return $this->request('GET', $url);
    }

    public function deleteWallet(string $walletId): ResponseInterface
    {
        $url = strtr('/v1/internal_wallets/{walletId}', [
            '{walletId}' => $walletId,
        ]);

        return $this->request('DELETE', $url);
    }

    public function retrieveAsset(string $walletId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/internal_wallets/{walletId}/{assetId}', [
            '{walletId}' => $walletId,
            '{assetId}'  => $assetId,
        ]);

        return $this->request('GET', $url);
    }

    public function addAsset(string $walletId, string $assetId, Asset $asset): ResponseInterface
    {
        $url = strtr('/v1/internal_wallets/{walletId}/{assetId}', [
            '{walletId}' => $walletId,
            '{assetId}'  => $assetId,
        ]);

        return $this->request('POST', $url, [
            'json' => $asset
        ]);
    }

    public function deleteAsset(string $walletId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/internal_wallets/{walletId}/{assetId}', [
            '{walletId}' => $walletId,
            '{assetId}'  => $assetId,
        ]);

        return $this->request('DELETE', $url);
    }

    public function setAmlCustomerRefId(string $walletId, string $customerRefId): ResponseInterface
    {
        $url = strtr('/v1/internal_wallets/{walletId}/set_customer_ref_id', [
            '{walletId}' => $walletId,
        ]);

        return $this->request('POST', $url, [
            'json' => ['customerRefId' => $customerRefId]
        ]);
    }
}