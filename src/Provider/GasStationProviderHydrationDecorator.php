<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Provider;

use Jaddek\Fireblocks\Http\Hydrator;
use Jaddek\Fireblocks\Http\Request\GasStation\Configuration as ConfigurationRequest;
use Jaddek\Fireblocks\Http\Response\GasStation\Configuration;
use Jaddek\Fireblocks\Http\Response\GasStation\GasStation;
use Jaddek\Fireblocks\Http\Response\ItemInterface;

final class GasStationProviderHydrationDecorator
{
    public function __construct(private GasStationProvider $provider)
    {

    }

    public function getSettings(): ItemInterface|GasStation
    {
        return Hydrator::instance($this->provider->getSettings(), GasStation::class);
    }

    public function updateSettings(ConfigurationRequest $configuration): Configuration|ItemInterface
    {
        return Hydrator::instance($this->provider->updateSettings($configuration), Configuration::class);
    }
}