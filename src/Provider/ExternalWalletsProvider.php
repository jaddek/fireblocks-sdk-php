<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\ExternalWalletsInterface;
use Jaddek\Fireblocks\Http\Request\ExchangeAccounts\Asset;
use Jaddek\Fireblocks\Http\Request\ExchangeAccounts\Wallet;

final class ExternalWalletsProvider extends Provider
{
    public function __construct(private ExternalWalletsInterface $endpoint)
    {

    }

    public function getWallets(): array
    {
        $response = $this->endpoint->getWallets();

        return $response->toArray();
    }

    public function createWallet(Wallet $wallet): array
    {
        $response = $this->endpoint->createWallet($wallet);

        return $response->toArray();
    }

    public function getWallet(string $walletId): array
    {
        $response = $this->endpoint->retrieveWallet($walletId);

        return $response->toArray();
    }

    public function deleteWallet(string $walletId): array
    {
        $response = $this->endpoint->deleteWallet($walletId);

        return $response->toArray();
    }

    public function getAsset(string $walletId, string $assetId): array
    {
        $response = $this->endpoint->retrieveAsset($walletId, $assetId);

        return $response->toArray();
    }

    public function addAsset(string $walletId, string $assetId, Asset $asset): array
    {
        $response = $this->endpoint->addAsset($walletId, $assetId, $asset);

        return $response->toArray();
    }

    public function deleteAsset(string $walletId, string $assetId): array
    {
        $response = $this->endpoint->deleteAsset($walletId, $assetId);

        return $response->toArray();
    }

    public function setAmlCustomerReference(string $walletId, string $customerRefId): array
    {
        $response = $this->endpoint->setAmlCustomerRefId($walletId, $customerRefId);

        return $response->toArray();
    }
}