<?php
declare(strict_types=1);

namespace Pricemind\Emag;

use Pricemind\Emag\Exceptions\ResponseError;
use Pricemind\Emag\Request\ReadProductOfferRequest;
use Pricemind\Emag\Request\UpdateProductOfferRequest;
use Pricemind\Emag\Response\ProductOffer;
use Pricemind\Emag\Response\ProductOfferResponse;
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

    public function readProductOffers(ReadProductOfferRequest $request): ProductOfferResponse
    {
        $response = $this->httpClient->post($this->buildResourceUrl('product_offer', 'read'), [
            'auth' => [$this->authentication->getUsername(), $this->authentication->getPassword()],
            'form_params' => $request->toArray()
        ]);

        $parsedResponse = $this->processResponse($response);

        return new ProductOfferResponse(...
            array_map(fn($array) => ProductOffer::fromArray($array), $parsedResponse['results']));
    }

    public function saveProductOffer(UpdateProductOfferRequest $request): array
    {
        $response = $this->httpClient->post($this->buildResourceUrl('product_offer', 'save'), [
            'auth' => [$this->authentication->getUsername(), $this->authentication->getPassword()],
            'form_params' => [$request->toArray()]
        ]);

        return $this->processResponse($response);
    }

    public function bulkSavPeroductOffer()
    {
        // todo
    }

    private function buildResourceUrl(string $resource, string $action): string
    {
        return sprintf($this->country->endpoint() . '/%s/%s', $resource, $action);
    }

    /**
     * @throws \Pricemind\Emag\Exceptions\ResponseError
     */
    private function processResponse(ResponseInterface $response): array
    {
        $body = $response->getBody();
        $body->rewind();
        $content = $body->getContents();
        $content = json_decode($content, true);

        // Check for errors
        if ($content['isError'] !== false) {


            throw new ResponseError(implode("\n", $content['messages']) ?? 'Unknown error');
        }

        return $content;
    }

}