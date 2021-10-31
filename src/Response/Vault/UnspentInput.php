<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\Vault;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class UnspentInput implements ItemInterface
{
    public function __construct(
        private Input  $input,
        private string $address,
        private string $amount,
        private ?string $confirmation,
        private string $status,
    )
    {

    }

    public function getInput(): Input
    {
        return $this->input;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @return string|null
     */
    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}