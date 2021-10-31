<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http;

use Jaddek\Fireblocks\Http\Endpoint\Endpoint;
use Jaddek\Fireblocks\Http\Endpoint\ExchangeAccounts;
use Jaddek\Fireblocks\Http\Endpoint\ExternalWallets;
use Jaddek\Fireblocks\Http\Endpoint\FiatAccounts;
use Jaddek\Fireblocks\Http\Endpoint\GasStation;
use Jaddek\Fireblocks\Http\Endpoint\InternalWallets;
use Jaddek\Fireblocks\Http\Endpoint\NetworkConnections;
use Jaddek\Fireblocks\Http\Endpoint\SmartTransfers;
use Jaddek\Fireblocks\Http\Endpoint\SupportedAssets;
use Jaddek\Fireblocks\Http\Endpoint\Transactions;
use Jaddek\Fireblocks\Http\Endpoint\Users;
use Jaddek\Fireblocks\Http\Endpoint\Vault;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Collection
{
    private static array $instances = [];

    public function __construct(
        private HttpClientInterface $client,
        private Signer              $signer,
        private ?LoggerInterface    $logger = null
    )
    {

    }

    private function getEndpoint(string $class): mixed
    {
        if (!(self::$instances[$class] ?? null) instanceof Endpoint) {
            self::$instances[$class] = new $class($this->client, $this->signer, $this->logger);
        }

        return self::$instances[$class];
    }

    public function getExchangeAccounts(): ExchangeAccounts
    {
        return $this->getEndpoint(ExchangeAccounts::class);
    }

    public function getExternalWallets(): ExternalWallets
    {
        return $this->getEndpoint(ExternalWallets::class);
    }

    public function getFiatAccounts(): FiatAccounts
    {
        return $this->getEndpoint(FiatAccounts::class);
    }

    public function getGasStation(): GasStation
    {
        return $this->getEndpoint(GasStation::class);
    }

    public function getInternalWallets(): InternalWallets
    {
        return $this->getEndpoint(InternalWallets::class);
    }

    public function getNetworkConnections(): NetworkConnections
    {
        return $this->getEndpoint(NetworkConnections::class);
    }

    public function getSmartTransfers(): SmartTransfers
    {
        return $this->getEndpoint(SmartTransfers::class);
    }

    public function getVault(): Vault
    {
        return $this->getEndpoint(Vault::class);
    }

    public function getUsers(): Users
    {
        return $this->getEndpoint(Users::class);
    }

    public function getTransactions(): Transactions
    {
        return $this->getEndpoint(Transactions::class);
    }

    public function getSupportedAssets(): SupportedAssets
    {
        return $this->getEndpoint(SupportedAssets::class);
    }
}