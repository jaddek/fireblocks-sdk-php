<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\Collection;
use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Account implements ItemInterface
{
    public function __construct(
        private string          $id,
        private string          $name,
        private bool          $hiddenOnUI,
        private bool          $autoFuel,
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isHiddenOnUi(): bool
    {
        return $this->hiddenOnUI;
    }

    /**
     * @return bool
     */
    public function isAutoFuel(): bool
    {
        return $this->autoFuel;
    }

    /**
     * @return Collection<Asset>
     */
    public function getAssets(): Collection
    {
        return $this->assets;
    }
}