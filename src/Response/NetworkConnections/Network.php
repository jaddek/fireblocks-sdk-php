<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\NetworkConnections;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Network implements ItemInterface
{
    public function __construct(
        private string $id,
        private Channel $localChannel,
        private Channel $remoteChannel,
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
     * @return Channel
     */
    public function getLocalChannel(): Channel
    {
        return $this->localChannel;
    }

    /**
     * @return Channel
     */
    public function getRemoteChannel(): Channel
    {
        return $this->remoteChannel;
    }
}