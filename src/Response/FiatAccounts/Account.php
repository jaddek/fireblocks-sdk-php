<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\FiatAccounts;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Account implements ItemInterface
{
    public function __construct(
        private string          $id,
        private string          $type,
        private string          $name,
        private string          $address,
        private AssetCollection $assets,
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
    public function getType(): string
    {
        return $this->type;
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
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return AssetCollection
     */
    public function getAssets(): AssetCollection
    {
        return $this->assets;
    }
}