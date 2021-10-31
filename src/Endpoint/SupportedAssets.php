<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Symfony\Contracts\HttpClient\ResponseInterface;

final class SupportedAssets extends Endpoint implements SupportedAssetsInterface
{
    public function retrieveSupportedAssets(): ResponseInterface
    {
        $url = '/v1/supported_assets';

        return $this->request('GET', $url);
    }
}