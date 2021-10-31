<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\SmartTransfers\Ticket;
use Jaddek\Fireblocks\Http\Request\SmartTransfers\TransferPeerPath;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface SmartTransfersInterface
{
    public function getTransferTickets(): ResponseInterface;

    public function createTransferTicket(Ticket $ticket): ResponseInterface;

    public function retrieveTransferTicket(string $ticketId): ResponseInterface;

    public function retrieveTermOfTransactionTicket(string $ticketId, string $termId): ResponseInterface;

    public function cancelTransferRequest(string $ticketId): ResponseInterface;

    public function makeTransferFromTransferTermContext(string $ticketId, string $termId, TransferPeerPath $path): ResponseInterface;
}