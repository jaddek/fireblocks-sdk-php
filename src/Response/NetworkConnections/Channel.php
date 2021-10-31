<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\NetworkConnections;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class Channel implements ItemInterface
{
    public function __construct(
        private string $networkId,
        private string $name,
    )
    {
    }

    /**
     * @return string
     */
    public function getNetworkId(): string
    {
        return $this->networkId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}