<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Response\GasStation;

use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class GasStation implements ItemInterface
{
    public function __construct(
        private array         $balance,
        private Configuration $configuration,
    )
    {
    }

    /**
     * @return array
     */
    public function getBalance(): array
    {
        return $this->balance;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }
}