<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\FiatAccountsInterface;
use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\ExternalWallets\Asset;
use Jaddek\Fireblocks\Http\Response\FiatAccounts\Account;
use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class FiatAccountsProviderHydrationDecorator
{
    public function __construct(private FiatAccountsProvider $provider)
    {

    }

    public function getAccounts(): CollectionInterface
    {
        return Hydrator::instance($this->provider->getAccounts(), Asset::class);
    }

    public function getAccount(string $accountId): ItemInterface|Account
    {
        return Hydrator::instance($this->provider->getAccount($accountId), Account::class);

    }

    public function redeemFundsToLinkedDDA(string $accountId, string $amount): array
    {
        return $this->provider->redeemFundsToLinkedDDA($accountId, $amount);
    }

    public function depositFundsFromLinkedDDA(string $accountId, string $amount): array
    {
        $response = $this->provider->depositFundsFromLinkedDDA($accountId, $amount);

    }
}