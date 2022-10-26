<?php
declare(strict_types=1);

namespace Pricemind\Emag\Request;

class UpdateProductOfferRequest implements RequestInterface
{

    private ?float $recommendedPrice;

    /**
     * @param int $id
     * @param int $status
     * @param float $salesPrice
     * @param int $vatId
     * @param array $handlingTime
     * @param array $stock
     */
    public function __construct(
        private int   $id,
        private int   $status,
        private float $salesPrice,
        private int   $vatId,
        private array $handlingTime,
        private array $stock,
    )
    {
    }


    public function toArray(): array
    {
        return array_filter([
                                'id' => $this->id,
                                'status' => $this->status,
                                'sale_price' => $this->salesPrice,
                                'vat_id' => $this->vatId,
                                'handling_time' => $this->handlingTime,
                                'stock' => $this->stock,
                                'recommended_price' => $this->recommendedPrice ?? null,
                            ], fn($value) => $value !== null);
    }

    /**
     * @param float|null $recommendedPrice
     */
    public function setRecommendedPrice(?float $recommendedPrice): void
    {
        $this->recommendedPrice = $recommendedPrice;
    }
}