<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Request\GasStation\Configuration;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface GasStationInterface
{
    public function retrieveSettings(): ResponseInterface;

    public function editSettings(Configuration $configuration): ResponseInterface;
}