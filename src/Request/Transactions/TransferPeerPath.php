<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\Transactions;

use Jaddek\Fireblocks\Http\JsonTrait;

class TransferPeerPath implements \JsonSerializable
{
    use JsonTrait;

    private const TYPE_VAULT_ACCOUNT    = 'VAULT_ACCOUNT';
    private const TYPE_EXCHANGE_ACCOUNT = 'EXCHANGE_ACCOUNT';
    private const TYPE_FIAT_ACCOUNT     = 'FIAT_ACCOUNT';
    private const TYPE_GAS_STATION      = 'GAS_STATION';

    private ?string $type = null;

    public function __construct(
        private string $id,
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

    public function setTypeFiatAccount(): void
    {
        $this->type = self::TYPE_FIAT_ACCOUNT;
    }

    public function setTypeGasStation(): void
    {
        $this->type = self::TYPE_GAS_STATION;
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
}