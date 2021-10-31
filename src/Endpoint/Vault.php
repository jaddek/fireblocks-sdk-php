<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

final class Vault extends Endpoint implements VaultInterface
{
    public function getAccounts(): ResponseInterface
    {
        $url = '/v1/vault/accounts';

        return $this->request('GET', $url);
    }

    public function getAccount(string $vaultAccountId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}', [
            '{vaultAccountId}' => $vaultAccountId
        ]);

        return $this->request('GET', $url);
    }

    public function createNewAccount(): ResponseInterface
    {
        $url = '/v1/vault/accounts';

        return $this->request('POST', $url);
    }

    public function renameAccount(string $vaultAccountId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}', [
            '{vaultAccountId}' => $vaultAccountId
        ]);

        return $this->request('PUT', $url);
    }

    public function getBalanceOfAccountAsset(string $vaultAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId
        ]);

        return $this->request('GET', $url);
    }

    public function createNewWallet(string $vaultAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId
        ]);

        return $this->request('POST', $url);
    }

    public function hideAccountInWebConsole(string $vaultAccountId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/hide', [
            '{vaultAccountId}' => $vaultAccountId,
        ]);

        return $this->request('POST', $url);
    }

    public function showAccountInWebConsole(string $vaultAccountId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/unhide', [
            '{vaultAccountId}' => $vaultAccountId,
        ]);

        return $this->request('POST', $url);
    }

    public function getAccountAddresses(string $vaultAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/addresses', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId,
        ]);

        return $this->request('GET', $url);
    }

    public function createDepositAddress(string $vaultAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/addresses', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId,
        ]);

        return $this->request('POST', $url);
    }

    public function renameAddress(string $vaultAccountId, string $assetId, string $addressId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/addresses/{addressId}', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId,
            '{addressId}'      => $addressId,
        ]);

        return $this->request('PUT', $url);
    }

    public function getMaximumSpendableAmount(string $vaultAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/max_spendable_amount', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId,
        ]);

        return $this->request('GET', $url);
    }

    public function setAmlCustomerRefIDForAccount(string $vaultAccountId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/set_customer_ref_id', [
            '{vaultAccountId}' => $vaultAccountId,
        ]);

        return $this->request('POST', $url);
    }

    public function setAmlCustomerRefIDForAddress(string $vaultAccountId, string $addressId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/addresses/{addressId}/set_customer_ref_id', [
            '{vaultAccountId}' => $vaultAccountId,
            '{addressId}'      => $addressId,
        ]);

        return $this->request('POST', $url);
    }

    public function getUnspentInputs(string $vaultAccountId, string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/unspent_inputs', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId,
        ]);

        return $this->request('GET', $url);
    }

    public function getPublicKeyByDerivationPath(): ResponseInterface
    {
        $url = '/v1/vault/public_key_info';

        return $this->request('GET', $url);
    }

    public function getPublicKeyOfFireBlockAddress(string $vaultAccountId, string $assetId, string $change, string $addressIndex): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/{assetId}/{change}/{addressIndex}/public_key_info', [
            '{vaultAccountId}' => $vaultAccountId,
            '{assetId}'        => $assetId,
            '{change}'         => $change,
            '{addressIndex}'   => $addressIndex,
        ]);

        return $this->request('GET', $url);
    }

    public function setAutoFuelProperties(string $vaultAccountId): ResponseInterface
    {
        $url = strtr('/v1/vault/accounts/{vaultAccountId}/set_auto_fuel', [
            '{vaultAccountId}' => $vaultAccountId,
        ]);

        return $this->request('POST', $url);
    }

    public function getVaultBalance(): ResponseInterface
    {
        $url = '/v1/vault/assets';

        return $this->request('GET', $url);
    }

    public function getAssetValueBalance(string $assetId): ResponseInterface
    {
        $url = strtr('/v1/vault/assets/{assetId}', [
            '{assetId}' => $assetId,
        ]);

        return $this->request('GET', $url);
    }
}