<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\FiatAccountsInterface;

final class FiatAccountsProvider extends Provider
{
    public function __construct(private FiatAccountsInterface $endpoint)
    {

    }

    public function getAccounts(): array
    {
        $response = $this->endpoint->getAccounts();

        return $response->toArray();
    }

    public function getAccount(string $accountId): array
    {
        $response = $this->endpoint->retrieveAccount($accountId);

        return $response->toArray();
    }

    public function redeemFundsToLinkedDDA(string $accountId, string $amount): array
    {
        $response = $this->endpoint->redeemFundsToLinkedDDA($accountId, $amount);

        return $response->toArray();
    }

    public function depositFundsFromLinkedDDA(string $accountId, string $amount): array
    {
        $response = $this->endpoint->depositFundsFromLinkedDDA($accountId, $amount);

        return $response->toArray();
    }
}