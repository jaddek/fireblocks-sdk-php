<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface FiatAccountsInterface
{
    public function getAccounts(): ResponseInterface;

    public function retrieveAccount(string $accountId): ResponseInterface;

    public function redeemFundsToLinkedDDA(string $accountId, string $amount): ResponseInterface;

    public function depositFundsFromLinkedDDA(string $accountId, string $amount): ResponseInterface;
}