<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\ExternalWallets\Asset;
use Jaddek\Fireblocks\Http\Request\ExternalWallets\Wallet;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface ExternalWalletsInterface
{
    public function getWallets(): ResponseInterface;

    public function createWallet(Wallet $wallet): ResponseInterface;

    public function retrieveWallet(string $walletId): ResponseInterface;

    public function deleteWallet(string $walletId): ResponseInterface;

    public function retrieveAsset(string $walletId, string $assetId): ResponseInterface;

    public function addAsset(string $walletId, string $assetId, Asset $asset): ResponseInterface;

    public function deleteAsset(string $walletId, string $assetId): ResponseInterface;

    public function setAmlCustomerRefId(string $walletId, string $customerRefId): ResponseInterface;
}