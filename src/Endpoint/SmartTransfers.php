<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\SmartTransfers\Ticket;
use Jaddek\Fireblocks\Http\Request\SmartTransfers\TransferPeerPath;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class SmartTransfers extends Endpoint implements SmartTransfersInterface
{
    public function getTransferTickets(): ResponseInterface
    {
        $url = '/v1/transfer_tickets';

        return $this->request('GET', $url);
    }

    public function createTransferTicket(Ticket $ticket): ResponseInterface
    {
        $url = '/v1/transfer_tickets';

        return $this->request('POST', $url, [
            'json' => $ticket
        ]);
    }

    public function retrieveTransferTicket(string $ticketId): ResponseInterface
    {
        $url = strtr('/v1/transfer_tickets/{ticketId}', [
            '{ticketId}' => $ticketId
        ]);

        return $this->request('GET', $url);
    }

    public function retrieveTermOfTransactionTicket(string $ticketId, string $termId): ResponseInterface
    {
        $url = strtr('/v1/transfer_tickets/{ticketId}/{termId}', [
            '{ticketId}' => $ticketId,
            '{termId}'   => $termId,
        ]);

        return $this->request('GET', $url);
    }

    public function cancelTransferRequest(string $ticketId): ResponseInterface
    {
        $url = strtr('/v1/transfer_tickets/{ticketId}/cancel', [
            '{ticketId}' => $ticketId
        ]);

        return $this->request('POST', $url);
    }

    public function makeTransferFromTransferTermContext(string $ticketId, string $termId, TransferPeerPath $path): ResponseInterface
    {
        $url = strtr('/v1/transfer_tickets/{ticketId}/{termId}/transfer', [
            '{ticketId}' => $ticketId,
            '{termId}'   => $termId,
        ]);

        return $this->request('POST', $url, [
            'json' => $path
        ]);
    }
}