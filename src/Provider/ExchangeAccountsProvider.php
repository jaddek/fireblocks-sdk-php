<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\ExchangeAccountsInterface;
use Jaddek\Fireblocks\Http\Request\ExchangeAccounts\ExchangeInternalTransfer;

final class ExchangeAccountsProvider extends Provider
{
    public function __construct(private ExchangeAccountsInterface $endpoint)
    {

    }

    public function getAccounts(): array
    {
        $response = $this->endpoint->getAccounts();

        return $response->toArray();
    }

    public function getAccount(string $exchangeAccountId): array
    {
        $response = $this->endpoint->retrieveAccount($exchangeAccountId);

        return $response->toArray();
    }

    public function getAsset(string $exchangeAccountId, string $assetId): array
    {
        $response = $this->endpoint->retrieveAsset($exchangeAccountId, $assetId);

        return $response->toArray();
    }

    public function exchangeInternalTransfer(string $exchangeAccountId, ExchangeInternalTransfer $transfer): array
    {
        $response = $this->endpoint->exchangeInternalTransfer($exchangeAccountId, $transfer);

        return $response->toArray();
    }
}