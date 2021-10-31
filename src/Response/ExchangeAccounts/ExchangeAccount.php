<?php


declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\ExchangeAccounts;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class ExchangeAccount implements ItemInterface
{
    public function __construct(
        private string                    $id,
        private string                    $name,
        private string                    $type,
        private AssetCollection           $assets,
        private bool                      $isSubaccount,
        private string                    $status,
        private TradingAccountsCollection $tradingAccounts,
        private ?string                   $fundableAccountType,
    )
    {

    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return AssetCollection
     */
    public function getAssets(): AssetCollection
    {
        return $this->assets;
    }

    /**
     * @return bool
     */
    public function isSubaccount(): bool
    {
        return $this->isSubaccount;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return array
     */
    public function getTradingAccounts(): array
    {
        return $this->tradingAccounts;
    }

    /**
     * @return string|null
     */
    public function getFundableAccountType(): ?string
    {
        return $this->fundableAccountType;
    }
}