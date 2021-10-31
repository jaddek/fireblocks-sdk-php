<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Response\Vault\Account;
use Jaddek\Fireblocks\Http\Response\Vault\AccountCollection;
use Jaddek\Fireblocks\Http\Response\Vault\AddressCollection;
use Jaddek\Fireblocks\Http\Response\Vault\AssetBalance;
use Jaddek\Fireblocks\Http\Response\Vault\AssetValueBalance;
use Jaddek\Fireblocks\Http\Response\Vault\MaximumSpendableAmount;
use Jaddek\Fireblocks\Http\Response\Vault\UnspentInputsCollection;

final class  VaultProviderHydrationDecorator
{
    public function __construct(private VaultProvider $provider)
    {

    }

    public function getAccounts(): AccountCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getAccounts(), AccountCollection::class);
    }

    public function getAccount(string $vaultAccountId): Account|ItemInterface
    {
        return Hydrator::instance($this->provider->getAccount($vaultAccountId), Account::class);
    }

    public function createNewAccount(): array
    {
        return $this->provider->createNewAccount();

    }

    public function renameAccount(string $vaultAccountId): array
    {
        return $this->provider->renameAccount($vaultAccountId);
    }

    public function getBalanceOfAccountAsset(string $vaultAccountId, string $assetId): AssetBalance|ItemInterface
    {
        return Hydrator::instance($this->provider->getBalanceOfAccountAsset($vaultAccountId, $assetId), AssetBalance::class);
    }

    public function createNewWallet(string $vaultAccountId, string $assetId): array
    {
        return $this->provider->createNewWallet($vaultAccountId, $assetId);
    }

    public function hideAccountInWebConsole(string $vaultAccountId): array
    {
        return $this->provider->hideAccountInWebConsole($vaultAccountId);
    }

    public function showAccountInWebConsole(string $vaultAccountId): array
    {
        return $this->provider->showAccountInWebConsole($vaultAccountId);
    }

    public function getAccountAddresses(string $vaultAccountId, string $assetId): AddressCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getAccountAddresses($vaultAccountId, $assetId), AddressCollection::class);
    }

    public function createDepositAddress(string $vaultAccountId, string $assetId): array
    {
        return $this->provider->createDepositAddress($vaultAccountId, $assetId);
    }

    public function renameAddress(string $vaultAccountId, string $assetId, string $addressId): array
    {
        return $this->provider->renameAddress($vaultAccountId, $assetId, $addressId);
    }

    public function getMaximumSpendableAmount(string $vaultAccountId, string $assetId): MaximumSpendableAmount|CollectionInterface
    {
        return Hydrator::instance($this->provider->getMaximumSpendableAmount($vaultAccountId, $assetId), MaximumSpendableAmount::class);
    }

    public function setAmlCustomerRefIDForAccount(string $vaultAccountId): array
    {
        return $this->provider->setAmlCustomerRefIDForAccount($vaultAccountId);
    }

    public function setAmlCustomerRefIDForAddress(string $vaultAccountId, string $addressId): array
    {
        return $this->provider->setAmlCustomerRefIDForAddress($vaultAccountId, $addressId);
    }

    public function getUnspentInputs(string $vaultAccountId, string $assetId): UnspentInputsCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getUnspentInputs($vaultAccountId, $assetId), UnspentInputsCollection::class);
    }

    public function getPublicKeyByDerivationPath(): array
    {
        return $this->provider->getPublicKeyByDerivationPath();
    }

    public function getPublicKeyOfFireBlockAddress(string $vaultAccountId, string $assetId, string $change, string $addressIndex): array
    {
        return $this->provider->getPublicKeyOfFireBlockAddress($vaultAccountId, $assetId, $change, $addressIndex);
    }

    public function setAutoFuelProperties(string $vaultAccountId): array
    {
        return $this->provider->setAutoFuelProperties($vaultAccountId);
    }

    public function getVaultBalance(): array
    {
        return $this->provider->getVaultBalance();
    }

    public function getAssetValueBalance(string $assetId): AssetValueBalance|ItemInterface
    {
        return Hydrator::instance($this->provider->getAssetValueBalance($assetId), AssetValueBalance::class);
    }
}