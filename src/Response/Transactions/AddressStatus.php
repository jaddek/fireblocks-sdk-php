<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Transactions;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class AddressStatus implements ItemInterface
{
    public function __construct(
        private bool $isValid,
        private bool $isActive,
        private bool $requiresTag,
    )
    {

    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->isValid;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @return bool
     */
    public function isRequiresTag(): bool
    {
        return $this->requiresTag;
    }
}