<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Request\SmartTransfers\Ticket;
use Jaddek\Fireblocks\Http\Request\SmartTransfers\TransferPeerPath;
use Jaddek\Fireblocks\Http\Response\CollectionInterface;
use Jaddek\Fireblocks\Http\Response\ItemInterface;
use Jaddek\Fireblocks\Http\Response\SmartTransfers\Term;
use Jaddek\Fireblocks\Http\Response\SmartTransfers\TransferTicket;
use Jaddek\Fireblocks\Http\Response\SmartTransfers\TransferTicketCollection;
use Jaddek\Fireblocks\Http\Response\SupportedAssets\AssetCollection;

final class SmartTransfersProviderHydrationDecorator
{
    public function __construct(private SmartTransfersProvider $provider)
    {

    }

    public function getTransferTickets(): CollectionInterface|TransferTicketCollection
    {
        return Hydrator::instance($this->provider->getTransferTickets(), TransferTicketCollection::class);
    }

    public function createTransferTicket(Ticket $ticket): array
    {
        return $this->provider->createTransferTicket($ticket);
    }

    public function getTransferTicket(string $ticketId): ItemInterface|TransferTicket
    {
        return Hydrator::instance($this->provider->getTransferTicket($ticketId), TransferTicket::class);
    }

    public function getTermOfTransactionTicket(string $ticketId, string $termId): Term|ItemInterface
    {
        return Hydrator::instance($this->provider->getTermOfTransactionTicket($ticketId, $termId), Term::class);
    }

    public function cancelTransferRequest(string $ticketId): array
    {
        return $this->provider->cancelTransferRequest($ticketId);
    }

    public function makeTransferFromTransferTermContext(string $ticketId, string $termId, TransferPeerPath $path): array
    {
        return $this->provider->makeTransferFromTransferTermContext($ticketId, $termId, $path);
    }

}