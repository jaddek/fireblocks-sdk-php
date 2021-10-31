<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\ExchangeAccounts\ExchangeInternalTransfer;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface ExchangeAccountsInterface
{
    public function getAccounts(): ResponseInterface;

    public function retrieveAccount(string $exchangeAccountId): ResponseInterface;

    public function retrieveAsset(string $exchangeAccountId, string $assetId): ResponseInterface;

    public function exchangeInternalTransfer(string $exchangeAccountId, ExchangeInternalTransfer $transfer): ResponseInterface;
}