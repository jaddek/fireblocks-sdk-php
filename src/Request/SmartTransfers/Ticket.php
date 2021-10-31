<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Request\SmartTransfers;

class Ticket implements \JsonSerializable
{
    public function __construct(
        private string $externalTicketId,
        private string $description,
        private array  $terms,
    )
    {

    }

    /**
     * @return string
     */
    public function getExternalTicketId(): string
    {
        return $this->externalTicketId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getTerms(): array
    {
        return $this->terms;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}