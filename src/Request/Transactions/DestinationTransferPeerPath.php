<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\Transactions;

use Jaddek\Fireblocks\Http\Request;

final class DestinationTransferPeerPath extends Request
{
    private const TYPE_VAULT_ACCOUNT      = 'VAULT_ACCOUNT';
    private const TYPE_EXCHANGE_ACCOUNT   = 'EXCHANGE_ACCOUNT';
    private const TYPE_INTERNAL_WALLET    = 'INTERNAL_WALLET';
    private const TYPE_EXTERNAL_WALLET    = 'EXTERNAL_WALLET';
    private const TYPE_ONE_TIME_ADDRESS   = 'ONE_TIME_ADDRESS';
    private const TYPE_NETWORK_CONNECTION = 'NETWORK_CONNECTION';
    private const TYPE_FIAT_ACCOUNT       = 'FIAT_ACCOUNT';
    private const TYPE_COMPOUND           = 'COMPOUND';

    protected ?string $type = null;


    public function __construct(
        protected string $id,
        protected ?OneTimeAddress $oneTimeAddress = null
    )
    {

    }

    public function setTypeVaultAccount(): void
    {
        $this->type = self::TYPE_VAULT_ACCOUNT;
    }

    public function setTypeExchangeAccount(): void
    {
        $this->type = self::TYPE_EXCHANGE_ACCOUNT;
    }

    public function setTypeInternalWallet(): void
    {
        $this->type = self::TYPE_INTERNAL_WALLET;
    }

    public function setTypeExternalWallet(): void
    {
        $this->type = self::TYPE_EXTERNAL_WALLET;
    }


    public function setTypeOneTimeAddress(): void
    {
        $this->type = self::TYPE_ONE_TIME_ADDRESS;
    }


    public function setTypeNetworkConnection(): void
    {
        $this->type = self::TYPE_NETWORK_CONNECTION;
    }

    public function setTypeFiatAccount(): void
    {
        $this->type = self::TYPE_FIAT_ACCOUNT;
    }

    public function setTypeCompound(): void
    {
        $this->type = self::TYPE_COMPOUND;
    }


    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return OneTimeAddress|null
     */
    public function getOneTimeAddress(): ?OneTimeAddress
    {
        return $this->oneTimeAddress;
    }
}