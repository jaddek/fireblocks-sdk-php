<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\SmartTransfers;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class TransferTicket implements ItemInterface
{
    public function __construct(
        private string         $ticketId,
        private string         $externalTicketId,
        private string         $status,
        private string         $description,
        private TermCollection $terms,

    )
    {

    }

    /**
     * @return string
     */
    public function getTicketId(): string
    {
        return $this->ticketId;
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
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return TermCollection
     */
    public function getTerms(): TermCollection
    {
        return $this->terms;
    }
}