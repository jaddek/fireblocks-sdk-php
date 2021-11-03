<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\ExternalWallets;

class Wallet implements \JsonSerializable
{
    public function __construct(
        private string $name,
        private string $customerRefId,
    )
    {

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
    public function getCustomerRefId(): string
    {
        return $this->customerRefId;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }


}