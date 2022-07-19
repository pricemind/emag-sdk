<?php
declare(strict_types=1);

namespace Pricemind\Emag;

use Pricemind\Emag\Exceptions\ResponseError;
use Psr\Http\Message\ResponseInterface;

class Client
{

    /**
     * @var \Pricemind\Emag\Authentication
     */
    private Authentication $authentication;
    private \GuzzleHttp\Client $httpClient;
    /**
     * @var \Pricemind\Emag\Countries
     */
    private Countries $country;

    public function __construct(\GuzzleHttp\Client $httpClient, Authentication $authentication, Countries $country)
    {
        $this->authentication = $authentication;
        $this->httpClient = $httpClient;
        $this->country = $country;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Pricemind\Emag\Exceptions\ResponseError
     */
    public function ping()
    {
        $response = $this->httpClient->post($this->buildResourceUrl('vat', 'read'), [
            'auth' => [$this->authentication->getUsername(), $this->authentication->getPassword()],
        ]);

        return $this->processResponse($response);
    }

    private function buildResourceUrl(string $resource, string $action): string
    {
        return sprintf($this->country->endpoint() . '/%s/%s', $resource, $action);
    }

    private function processResponse(ResponseInterface $response): array
    {
        $body = $response->getBody();
        $body->rewind();
        $content = $body->getContents();
        $content = json_decode($content, true);

        // Check for errors
        if ($content['isError'] !== false) {
            throw new ResponseError($content['message'] ?? 'Unknown error');
        }

        return $content;
    }

}