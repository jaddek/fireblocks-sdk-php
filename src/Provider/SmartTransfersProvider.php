<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Endpoint\SmartTransfersInterface;
use Jaddek\Fireblocks\Http\Request\SmartTransfers\Ticket;
use Jaddek\Fireblocks\Http\Request\SmartTransfers\TransferPeerPath;

final class SmartTransfersProvider extends Provider
{
    public function __construct(private SmartTransfersInterface $endpoint)
    {

    }

    public function getTransferTickets(): array
    {
        $response = $this->endpoint->getTransferTickets();

        return $response->toArray();
    }

    public function createTransferTicket(Ticket $ticket): array
    {
        $response = $this->endpoint->createTransferTicket($ticket);

        return $response->toArray();
    }

    public function getTransferTicket(string $ticketId): array
    {
        $response = $this->endpoint->retrieveTransferTicket($ticketId);

        return $response->toArray();
    }

    public function getTermOfTransactionTicket(string $ticketId, string $termId): array
    {
        $response = $this->endpoint->retrieveTermOfTransactionTicket($ticketId, $termId);

        return $response->toArray();
    }

    public function cancelTransferRequest(string $ticketId): array
    {
        $response = $this->endpoint->cancelTransferRequest($ticketId);

        return $response->toArray();
    }

    public function makeTransferFromTransferTermContext(string $ticketId, string $termId, TransferPeerPath $path): array
    {
        $response = $this->endpoint->makeTransferFromTransferTermContext($ticketId, $termId, $path);

        return $response->toArray();
    }

}