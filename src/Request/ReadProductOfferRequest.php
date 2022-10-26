<?php
declare(strict_types=1);

namespace Pricemind\Emag\Request;

class ReadProductOfferRequest implements RequestInterface
{
    public function __construct(private readonly int $id)
    {
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id
        ];
    }

}