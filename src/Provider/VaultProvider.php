<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\VaultInterface;
use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Response\Vault\Account;
use Jaddek\Fireblocks\Http\Response\Vault\AccountCollection;
use Jaddek\Fireblocks\Http\Response\Vault\MaximumSpendableAmount;

final class VaultProvider extends Provider
{
    public function __construct(private VaultInterface $endpoint)
    {

    }

    public function getAccounts(): array|CollectionInterface|ItemInterface
    {
        $response = $this->endpoint->getAccounts();

        return $response->toArray();
    }

    public function getAccount(string $vaultAccountId): array
    {
        $response = $this->endpoint->getAccount($vaultAccountId);

        return $response->toArray();
    }

    public function createNewAccount(): array
    {
        $response = $this->endpoint->createNewAccount();

        return $response->toArray();
    }

    public function renameAccount(string $vaultAccountId): array
    {
        $response = $this->endpoint->renameAccount($vaultAccountId);

        return $response->toArray();
    }

    public function getBalanceOfAccountAsset(string $vaultAccountId, string $assetId): array
    {
        $response = $this->endpoint->getBalanceOfAccountAsset($vaultAccountId, $assetId);

        return $response->toArray();
    }

    public function createNewWallet(string $vaultAccountId, string $assetId): array
    {
        $response = $this->endpoint->createNewWallet($vaultAccountId, $assetId);

        return $response->toArray();
    }

    public function hideAccountInWebConsole(string $vaultAccountId): array
    {
        $response = $this->endpoint->hideAccountInWebConsole($vaultAccountId);

        return $response->toArray();
    }

    public function showAccountInWebConsole(string $vaultAccountId): array
    {
        $response = $this->endpoint->showAccountInWebConsole($vaultAccountId);

        return $response->toArray();
    }

    public function getAccountAddresses(string $vaultAccountId, string $assetId): array
    {
        $response = $this->endpoint->getAccountAddresses($vaultAccountId, $assetId);

        return $response->toArray();
    }

    public function createDepositAddress(string $vaultAccountId, string $assetId): array
    {
        $response = $this->endpoint->createDepositAddress($vaultAccountId, $assetId);

        return $response->toArray();
    }

    public function renameAddress(string $vaultAccountId, string $assetId, string $addressId): array
    {
        $response = $this->endpoint->renameAddress($vaultAccountId, $assetId, $addressId);

        return $response->toArray();
    }

    public function getMaximumSpendableAmount(string $vaultAccountId, string $assetId): array
    {
        $response = $this->endpoint->getMaximumSpendableAmount($vaultAccountId, $assetId);

        return $response->toArray();
    }

    public function setAmlCustomerRefIDForAccount(string $vaultAccountId): array
    {
        $response = $this->endpoint->setAmlCustomerRefIDForAccount($vaultAccountId);

        return $response->toArray();
    }

    public function setAmlCustomerRefIDForAddress(string $vaultAccountId, string $addressId): array
    {
        $response = $this->endpoint->setAmlCustomerRefIDForAddress($vaultAccountId, $addressId);

        return $response->toArray();
    }

    public function getUnspentInputs(string $vaultAccountId, string $assetId): array
    {
        $response = $this->endpoint->getUnspentInputs($vaultAccountId, $assetId);

        return $response->toArray();
    }

    public function getPublicKeyByDerivationPath(): array
    {
        $response = $this->endpoint->getPublicKeyByDerivationPath();

        return $response->toArray();
    }

    public function getPublicKeyOfFireBlockAddress(string $vaultAccountId, string $assetId, string $change, string $addressIndex): array
    {
        $response = $this->endpoint->getPublicKeyOfFireBlockAddress($vaultAccountId, $assetId, $change, $addressIndex);

        return $response->toArray();
    }

    public function setAutoFuelProperties(string $vaultAccountId): array
    {
        $response = $this->endpoint->setAutoFuelProperties($vaultAccountId);

        return $response->toArray();
    }

    public function getVaultBalance(): array
    {
        $response = $this->endpoint->getVaultBalance();

        return $response->toArray();
    }

    public function getAssetValueBalance(string $assetId): array
    {
        $response = $this->endpoint->getAssetValueBalance($assetId);

        return $response->toArray();
    }
}