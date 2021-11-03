<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http;

use Firebase\JWT\JWT;

class Signer
{
    private const EXPIRATION_IN_SECONDS = 30;
    private const JWT_ALGO              = 'RS256';
    private const BODY_ALGO             = 'sha256';
    private const MINIMUM_NONCE         = 1000;

    public function __construct(private string $apiKey, protected string $secretKeyFile)
    {

    }

    /**
     * @param string $uri
     * @param array|\JsonSerializable|null $body
     * @return string
     * @throws \Exception
     */
    public function __invoke(string $uri, null|array|\JsonSerializable $body = null): string
    {
        $payload = $this->getPayload($uri, $body);
        $secret  = $this->getSecretKey();

        return $this->getAccessToken($payload, $secret);

    }

    protected function getSecretKey(): string
    {
        if (file_exists($this->secretKeyFile) === false) {
            throw new \Exception('File with secret key not found');
        }

        $content = file_get_contents($this->secretKeyFile);

        if ($content === false) {
            throw new \Exception('Can not read the content of the file');
        }

        return $content;
    }

    /**
     * @param array $payload
     * @param string $secret
     * @return string
     *
     * The JWT should be signed with the Fireblocks API secret key
     * and the RS256 (RSASSA-PKCS1-v1_5 using SHA-256 hash) algorithm.
     */
    protected function getAccessToken(array $payload, string $secret): string
    {
        return JWT::encode($payload, $secret, self::JWT_ALGO);
    }

    /**
     * The payload field should contain the following fields:
     *    uri - The URI part of the request (e.g., /v1/transactions).
     *    nonce - Unique number or string. Each API request needs to have a different nonce.
     *    iat - The time at which the JWT was issued, in seconds since Epoch.
     *    exp - The expiration time on and after which the JWT must not be accepted for processing, in seconds since Epoch. Must be less than iat+30sec.
     *    sub - The API Key.
     *    bodyHash - Hex-encoded SHA-256 hash of the raw HTTP request body.
     *
     * @param string $uri
     * @param array|null $body
     * @return array
     */
    protected function getPayload(string $uri, null|array|\JsonSerializable $body = null): array
    {
        $time = time();

        $payload = [
            'uri'   => $uri,
            'nonce' => rand(self::MINIMUM_NONCE, getrandmax()),
            'iat'   => $time,
            'exp'   => $time + self::EXPIRATION_IN_SECONDS,
            'sub'   => $this->apiKey,
        ];

        if (is_array($body) || $body instanceof \JsonSerializable) {
            $payload['bodyHash'] = hash(self::BODY_ALGO, json_encode($body));
        }

        return $payload;
    }
}