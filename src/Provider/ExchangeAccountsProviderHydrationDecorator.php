<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\ExchangeAccounts;
use Jaddek\Fireblocks\Http\Endpoint\ExchangeAccountsInterface;
use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Request\ExchangeAccounts\ExchangeInternalTransfer;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\ExchangeAccounts\Asset;
use Jaddek\Fireblocks\Http\Response\ExchangeAccounts\ExchangeAccount;
use Jaddek\Fireblocks\Http\Response\ExchangeAccounts\ExchangeAccountCollection;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Response\Vault\AccountCollection;

final class ExchangeAccountsProviderHydrationDecorator extends Provider
{
    public function __construct(private ExchangeAccountsProvider $provider)
    {

    }

    public function getAccounts(): ExchangeAccountCollection|CollectionInterface
    {
        return Hydrator::instance($this->provider->getAccounts(), ExchangeAccountCollection::class);
    }

    public function getAccount(string $exchangeAccountId): ExchangeAccount|CollectionInterface
    {
        return Hydrator::instance($this->provider->getAccount($exchangeAccountId), ExchangeAccount::class);
    }

    public function getAsset(string $exchangeAccountId, string $assetId): Asset|ItemInterface
    {
        return Hydrator::instance($this->provider->getAsset($exchangeAccountId, $assetId), Asset::class);
    }

    public function exchangeInternalTransfer(string $exchangeAccountId, ExchangeInternalTransfer $transfer): array
    {
        return $this->provider->exchangeInternalTransfer($exchangeAccountId, $transfer);
    }
}