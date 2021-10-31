<?php

declare(strict_types=1);

namespace Jaddek\Fireblocks\Http\Endpoint;

use Jaddek\Fireblocks\Http\Signer;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class Endpoint
{
    public function __construct(
        protected HttpClientInterface $fireblocksClient,
        protected Signer              $signer,
        protected ?LoggerInterface    $logger
    )
    {

    }

    /**
     * Дичь какая-то, не понимаю поведение зачем обрамлять запрос отдельно
     *
     * @param string $method
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    protected function request(string $method, string $url, array $options = []): ResponseInterface
    {
        try {
            return $this->doRequest($method, $url, $options);
        } catch (ClientException $exception) {
            $response = $exception->getResponse();

            $this->logger?->debug(sprintf('%s:%s:response', __CLASS__, __FUNCTION__), [
                'response' => [
                    'content' => $response->getContent(false),
                    'headers' => $response->getHeaders(false)
                ]
            ]);

            return $response;
        }
    }

    protected function doRequest(string $method, string $url, array $options = []): ResponseInterface
    {
        $token = $this->signer->__invoke($url, $options['json'] ?? null);

        $finalOptions = array_merge($options, [
            'headers' => [
                'Authorization' => sprintf('Bearer %s', $token)
            ]
        ]);

        $this->logger?->debug(sprintf('%s:%s:request', __CLASS__, __FUNCTION__), [
            'request' => [
                'url'     => $url,
                'method'  => $method,
                'options' => $finalOptions
            ]
        ]);

        $response = $this->fireblocksClient->request($method, $url, $finalOptions);

        $this->logger?->debug(sprintf('%s:%s:response', __CLASS__, __FUNCTION__), [
            'response' => [
                'content' => $response->getContent(false),
                'headers' => $response->getHeaders()
            ]
        ]);

        return $response;
    }
}