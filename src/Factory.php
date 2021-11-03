<?php

namespace Jaddek\Fireblocks\Http;

use Jaddek\Fireblocks\Http\Endpoint\Endpoint;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Factory
{
    public static function buildCollection(string $key, string $secretKey): EndpointCollection
    {
        $signer     = new Signer($key, $secretKey);
        $httpClient = self::getHttpClient($key);

        return new EndpointCollection($httpClient, $signer);
    }

    public static function buildEndpoint(string $class, string $key, string $secretKey): Endpoint
    {
        $signer     = new Signer($key, $secretKey);
        $httpClient = self::getHttpClient($key);

        return new $class($httpClient, $signer);
    }

    private static function getHttpClient(string $key): HttpClientInterface
    {
        return HttpClient::createForBaseUri(Fireblocks::HOST_API, [
            'headers' => array_merge(
                ['X-API-Key' => $key],
                Fireblocks::DEFAULT_HEADERS,
            )
        ]);
    }
}
