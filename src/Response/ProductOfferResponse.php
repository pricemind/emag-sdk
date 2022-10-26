<?php
declare(strict_types=1);

namespace Pricemind\Emag\Response;

class ProductOfferResponse
{
    /**
     * @var \Pricemind\Emag\Response\ProductOffer[]
     */
    private array $productOffers;

    public function __construct(ProductOffer ...$productOffers)
    {
        $this->productOffers = $productOffers;
    }

    /**
     * @return array
     */
    public function getProductOffers(): array
    {
        return $this->productOffers;
    }


}