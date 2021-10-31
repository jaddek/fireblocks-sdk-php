<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\SmartTransfers;

class TransferPeerPath implements \JsonSerializable
{
    private const VAULT_ACCOUNT    = 'VAULT_ACCOUNT';
    private const EXCHANGE_ACCOUNT = 'EXCHANGE_ACCOUNT';
    private const FIAT_ACCOUNT     = 'FIAT_ACCOUNT';
    private const GAS_STATION      = 'GAS_STATION';

    private ?string $type = null;

    public function __construct(
        private string $id,
    )
    {

    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function setTypeVaultAccount(): void
    {
        $this->type = self::VAULT_ACCOUNT;
    }

    public function setTypeExchangeAccount(): void
    {
        $this->type = self::EXCHANGE_ACCOUNT;
    }

    public function setTypeFiatAccount(): void
    {
        $this->type = self::FIAT_ACCOUNT;
    }

    public function setTypeGasStation(): void
    {
        $this->type = self::GAS_STATION;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}