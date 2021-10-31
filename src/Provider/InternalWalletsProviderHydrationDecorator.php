<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\InternalWallets\Asset;
use Jaddek\Fireblocks\Http\Response\InternalWallets\Wallet;
use Jaddek\Fireblocks\Http\Response\InternalWallets\WalletCollection;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Request\InternalWallets\Wallet as WalletRequest;
use Jaddek\Fireblocks\Http\Request\InternalWallets\Asset as AssetRequest;

final class InternalWalletsProviderHydrationDecorator extends Provider
{
    public function __construct(private InternalWalletsProvider $provider)
    {

    }

    public function getWallets(): CollectionInterface|WalletCollection
    {
        return Hydrator::instance($this->provider->getWallets(), WalletCollection::class);
    }

    public function createWallet(WalletRequest $wallet): ItemInterface|Wallet
    {
        return Hydrator::instance($this->provider->createWallet($wallet), Wallet::class);
    }

    public function getWallet(string $walletId): ItemInterface|Wallet
    {
        return Hydrator::instance($this->provider->getWallet($walletId), Wallet::class);
    }

    public function deleteWallet(string $walletId): array
    {
        return $this->provider->deleteWallet($walletId);
    }

    public function getAsset(string $walletId, string $assetId): Asset|ItemInterface
    {
        return Hydrator::instance($this->provider->getAsset($walletId, $assetId), Asset::class);
    }

    public function addAsset(string $walletId, string $assetId, AssetRequest $asset): Asset|ItemInterface
    {
        return Hydrator::instance($this->provider->addAsset($walletId, $assetId, $asset), Asset::class);
    }

    public function deleteAsset(string $walletId, string $assetId): array
    {
        return $this->provider->deleteAsset($walletId, $assetId);
    }

    public function setAmlCustomerReference(string $walletId, string $customerRefId): array
    {
        return $this->provider->setAmlCustomerReference($walletId, $customerRefId);
    }
}