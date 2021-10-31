<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

final class FiatAccounts extends Endpoint implements FiatAccountsInterface
{
    public function getAccounts(): ResponseInterface
    {
        $url = '/v1/fiat_accounts';

        return $this->request('GET', $url);
    }

    public function retrieveAccount(string $accountId): ResponseInterface
    {
        $url = strtr('/v1/fiat_accounts/{accountId}', [
            '{accountId}' => $accountId,
        ]);

        return $this->request('GET', $url);
    }

    public function redeemFundsToLinkedDDA(string $accountId, string $amount): ResponseInterface
    {
        $url = strtr('/v1/fiat_accounts/{accountId}/redeem_to_linked_dda', [
            '{accountId}' => $accountId,
        ]);

        return $this->request('POST', $url, [
            'json' => ['amount' => $amount]
        ]);
    }

    public function depositFundsFromLinkedDDA(string $accountId, string $amount): ResponseInterface
    {
        $url = strtr('/v1/fiat_accounts/{accountId}/deposit_from_linked_dda', [
            '{accountId}' => $accountId,
        ]);

        return $this->request('POST', $url, [
            'amount' => $amount,
        ]);
    }
}