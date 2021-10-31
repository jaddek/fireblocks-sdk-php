<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface VaultInterface
{
    public function getAccounts(): ResponseInterface;

    public function getAccount(string $vaultAccountId): ResponseInterface;

    public function createNewAccount(): ResponseInterface;

    public function renameAccount(string $vaultAccountId): ResponseInterface;

    public function getBalanceOfAccountAsset(string $vaultAccountId, string $assetId): ResponseInterface;

    public function createNewWallet(string $vaultAccountId, string $assetId): ResponseInterface;

    public function hideAccountInWebConsole(string $vaultAccountId): ResponseInterface;

    public function showAccountInWebConsole(string $vaultAccountId): ResponseInterface;

    public function getAccountAddresses(string $vaultAccountId, string $assetId): ResponseInterface;

    public function createDepositAddress(string $vaultAccountId, string $assetId): ResponseInterface;

    public function renameAddress(string $vaultAccountId, string $assetId, string $addressId): ResponseInterface;

    public function getMaximumSpendableAmount(string $vaultAccountId, string $assetId): ResponseInterface;

    public function setAmlCustomerRefIDForAccount(string $vaultAccountId): ResponseInterface;

    public function setAmlCustomerRefIDForAddress(string $vaultAccountId, string $addressId): ResponseInterface;

    public function getUnspentInputs(string $vaultAccountId, string $assetId): ResponseInterface;

    public function getPublicKeyByDerivationPath(): ResponseInterface;

    public function getPublicKeyOfFireBlockAddress(string $vaultAccountId, string $assetId, string $change, string $addressIndex): ResponseInterface;

    public function setAutoFuelProperties(string $vaultAccountId): ResponseInterface;

    public function getVaultBalance(): ResponseInterface;

    public function getAssetValueBalance(string $assetId): ResponseInterface;
}