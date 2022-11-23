<?php
declare(strict_types=1);

namespace Pricemind\Emag\Response;

class ProductOffer
{
    /**
     * part_number_key = "D0P8RYBBM"
     * brand_name = "DeWALT"
     * buy_button_rank = {int} 1
     * category_id = {int} 330
     * id = {int} 74248
     * brand = "DeWALT"
     * vendor_category_id = null
     * name = "Професионален Перфоратор Dewalt SDS-Plus  D25133K, 800 W, 2.6 J, 3 позиции"
     * part_number = "D25133K"
     * sale_price = {float} 274.91
     * currency = "BGN"
     * description = "&#1050;&#1086;&#1084;&#1073;&#1080;&#1085;&#1080;&#1088;&#1072;&#1085; &#1087;&#1077;&#1088;&#1092;&#1086;&#1088;&#1072;&#1090;&#1086;&#1088; DeWalt - 800W. <br>\r\n&#1048;&#1079;&#1082;&#1083;&#1102;&#1095;&#1080;&#1090;&#1077;&#1083;&#1085;&#1086; &#1084;&#1086;&#1097;&#1085;&#1072; &#1084;&#1072;&#1096;&#1080;&#1085;&#1072; &#1079;&#1072; &#1087;&#1088;&#1086;&#1092;&#1077;&#1089;&#1080;&#1086;&#1085;&#1072;&#1083;&#1085;&#1072; &#1088;&#1072;&#1073;&#1086;&#1090;&#1072;.<br>\r\n &#1045;&#1085;&#1077;&#1088;&#1075;&#1080;&#1103; &#1085;&#1072; &#1091;&#1076;&#1072;&#1088;&#1072; 2,6J!. <br>\r\n&#1052;&#1072;&#1082;&#1089;&#1080;&#1084;&#1072;&#1083;&#1085;&#1072; &#1079;&#1072;&#1097;&#1080;&#1090;&#1072; &#1086;&#1090; &#1087;&#1088;&#1072;&#1093;, &#1087;&#1086;&#1076;&#1086;&#1073;&#1088;&#1077;&#1085;&#1072; &#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1072; &#1079;&#1072; &#1079;&#1072;&#1087;&#1077;&#1095;&#1072;&#1090;&#1074;&#1072;&#1085;&#1077;. <br>\r\n&#1045;&#1088;&#1075;&#1086;&"
     * url = ""
     * warranty = {int} 24
     * general_stock = {int} 30
     * weight = "3"
     * status = {int} 1
     * recommended_price = {int} 0
     * images = {array[4]}
     * characteristics = {array[1]}
     * attachments = {array[0]}
     * vat_id = {int} 6
     * family = null
     * start_date = {array[0]}
     * estimated_stock = {int} 30
     * min_sale_price = {float} 140.833
     * max_sale_price = {float} 394.333
     * offer_details = {array[4]}
     * content_details = {array[1]}
     * offer_properties = {array[0]}
     * availability = {array[1]}
     * stock = {array[1]}
     * handling_time = {array[1]}
     * barcode = {array[0]}
     * ean = {array[0]}
     * commission = null
     * validation_status = {array[1]}
     * offer_validation_status = {array[3]}
     * ownership = true
     * best_offer_sale_price = {float} 274.91
     * best_offer_recommended_price = {float} 274.91
     * number_of_offers = {int} 2
     * rrp_guidelines = "RRP input possible"
     */
    private string $partNumberKey;

    private ?string $brandName;

    private ?int $buyButtonRank;

    private ?int $categoryId;

    private int $id;

    private ?string $brand;

    private ?int $vendorCategoryId;

    private string $name;

    private float $salePrice;

    private string $currency;

    private string $description;

    private string $url;

    private int $warranty;

    private int $generalStock;

    private string $weight;

    private int $status;

    private float $recommendedPrice;

    private array $images;

    private array $characteristics;

    private array $attachments;

    private int $vatId;

    private ?string $family;

    private array $startDate;

    private int $estimatedStock;

    private ?float $minSalePrice;

    private ?float $maxSalePrice;

    private array $offerDetails;

    private ?array $contentDetails;

    private array $offerProperties;

    private array $availability;

    private array $stock;

    private array $handlingTime;

    private array $barcode;

    private array $ean;

    private ?string $commission;

    private array $validationStatus;

    private array $offerValidationStatus;

    private bool $ownership;

    private ?float $bestOfferSalePrice;

    private ?float $bestOfferRecommendedPrice;

    private int $numberOfOffers;

    private ?string $rrpGuidelines;

    /**
     * @param array $params
     * @return \Pricemind\Emag\Response\ProductOffer
     */
    public static function fromArray(array $params): self
    {
        $product = new self();
        $product->setPartNumberKey($params['part_number_key']);
        $product->setBrandName($params['brand_name'] ?? null);
        $product->setBuyButtonRank($params['buy_button_rank'] ?? null);
        $product->setCategoryId($params['category_id'] ?? null);
        $product->setId((int)$params['id']);
        $product->setBrand($params['brand'] ?? null);
        $product->setVendorCategoryId($params['vendor_category_id']);
        $product->setName($params['name']);
        $product->setSalePrice((float)$params['sale_price']);
        $product->setCurrency($params['currency']);
        $product->setDescription($params['description']);
        $product->setUrl($params['url']);
        $product->setWarranty((int)$params['warranty']);
        $product->setGeneralStock((int)$params['general_stock']);
        $product->setWeight($params['weight']);
        $product->setStatus((int)$params['status']);
        $product->setRecommendedPrice((float)$params['recommended_price']);
        $product->setImages($params['images']);
        $product->setCharacteristics($params['characteristics']);
        $product->setAttachments($params['attachments']);
        $product->setVatId((int)$params['vat_id']);
        $product->setFamily($params['family']);
        $product->setStartDate($params['start_date']);
        $product->setEstimatedStock((int)$params['estimated_stock']);
        $product->setMinSalePrice((float)$params['min_sale_price']);
        $product->setMaxSalePrice((float)$params['max_sale_price']);
        $product->setOfferDetails($params['offer_details']);
        $product->setContentDetails($params['content_details']);
        $product->setOfferProperties($params['offer_properties']);
        $product->setAvailability($params['availability']);
        $product->setStock($params['stock']);
        $product->setHandlingTime($params['handling_time']);
        $product->setBarcode($params['barcode']);
        $product->setEan($params['ean']);
        $product->setCommission($params['commission']);
        $product->setValidationStatus($params['validation_status']);
        $product->setOfferValidationStatus($params['offer_validation_status']);
        $product->setOwnership((bool)$params['ownership']);
        $product->setBestOfferSalePrice((float)$params['best_offer_sale_price']);
        $product->setBestOfferRecommendedPrice((float)$params['best_offer_recommended_price']);
        $product->setNumberOfOffers((int)$params['number_of_offers']);
        $product->setRrpGuidelines($params['rrp_guidelines']??null);

        return $product;
    }

    /**
     * @return string
     */
    public function getPartNumberKey(): string
    {
        return $this->partNumberKey;
    }

    /**
     * @param string $partNumberKey
     */
    public function setPartNumberKey(string $partNumberKey): void
    {
        $this->partNumberKey = $partNumberKey;
    }

    /**
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName ?? null;
    }

    /**
     * @param string|null $brandName
     */
    public function setBrandName(?string $brandName): void
    {
        $this->brandName = $brandName;
    }

    /**
     * @return int|null
     */
    public function getBuyButtonRank(): ?int
    {
        return $this->buyButtonRank;
    }

    /**
     * @param int|null $buyButtonRank
     */
    public function setBuyButtonRank(?int $buyButtonRank): void
    {
        $this->buyButtonRank = $buyButtonRank;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId ?? null;
    }

    /**
     * @param int|null $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return int|null
     */
    public function getVendorCategoryId(): ?int
    {
        return $this->vendorCategoryId;
    }

    /**
     * @param int|null $vendorCategoryId
     */
    public function setVendorCategoryId(?int $vendorCategoryId): void
    {
        $this->vendorCategoryId = $vendorCategoryId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getSalePrice(): float
    {
        return $this->salePrice;
    }

    /**
     * @param float $salePrice
     */
    public function setSalePrice(float $salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getWarranty(): int
    {
        return $this->warranty;
    }

    /**
     * @param int $warranty
     */
    public function setWarranty(int $warranty): void
    {
        $this->warranty = $warranty;
    }

    /**
     * @return int
     */
    public function getGeneralStock(): int
    {
        return $this->generalStock;
    }

    /**
     * @param int $generalStock
     */
    public function setGeneralStock(int $generalStock): void
    {
        $this->generalStock = $generalStock;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getRecommendedPrice(): float
    {
        return $this->recommendedPrice;
    }

    /**
     * @param float $recommendedPrice
     */
    public function setRecommendedPrice(float $recommendedPrice): void
    {
        $this->recommendedPrice = $recommendedPrice;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    /**
     * @param array $characteristics
     */
    public function setCharacteristics(array $characteristics): void
    {
        $this->characteristics = $characteristics;
    }

    /**
     * @return array
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param array $attachments
     */
    public function setAttachments(array $attachments): void
    {
        $this->attachments = $attachments;
    }

    /**
     * @return int
     */
    public function getVatId(): int
    {
        return $this->vatId;
    }

    /**
     * @param int $vatId
     */
    public function setVatId(int $vatId): void
    {
        $this->vatId = $vatId;
    }

    /**
     * @return string|null
     */
    public function getFamily(): ?string
    {
        return $this->family;
    }

    /**
     * @param string|null $family
     */
    public function setFamily(?string $family): void
    {
        $this->family = $family;
    }

    /**
     * @return array
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param array $startDate
     */
    public function setStartDate(array $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int
     */
    public function getEstimatedStock(): int
    {
        return $this->estimatedStock;
    }

    /**
     * @param int $estimatedStock
     */
    public function setEstimatedStock(int $estimatedStock): void
    {
        $this->estimatedStock = $estimatedStock;
    }

    /**
     * @return float|null
     */
    public function getMinSalePrice(): ?float
    {
        return $this->minSalePrice;
    }

    /**
     * @param float|null $minSalePrice
     */
    public function setMinSalePrice(?float $minSalePrice): void
    {
        $this->minSalePrice = $minSalePrice;
    }

    /**
     * @return float|null
     */
    public function getMaxSalePrice(): ?float
    {
        return $this->maxSalePrice;
    }

    /**
     * @param float|null $maxSalePrice
     */
    public function setMaxSalePrice(?float $maxSalePrice): void
    {
        $this->maxSalePrice = $maxSalePrice;
    }

    /**
     * @return array
     */
    public function getOfferDetails(): array
    {
        return $this->offerDetails;
    }

    /**
     * @param array $offerDetails
     */
    public function setOfferDetails(array $offerDetails): void
    {
        $this->offerDetails = $offerDetails;
    }

    /**
     * @return array|null
     */
    public function getContentDetails(): ?array
    {
        return $this->contentDetails;
    }

    /**
     * @param array|null $contentDetails
     */
    public function setContentDetails(?array $contentDetails): void
    {
        $this->contentDetails = $contentDetails;
    }


    /**
     * @return array
     */
    public function getOfferProperties(): array
    {
        return $this->offerProperties;
    }

    /**
     * @param array $offerProperties
     */
    public function setOfferProperties(array $offerProperties): void
    {
        $this->offerProperties = $offerProperties;
    }

    /**
     * @return array
     */
    public function getAvailability(): array
    {
        return $this->availability;
    }

    /**
     * @param array $availability
     */
    public function setAvailability(array $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @return array
     */
    public function getStock(): array
    {
        return $this->stock;
    }

    /**
     * @param array $stock
     */
    public function setStock(array $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return array
     */
    public function getHandlingTime(): array
    {
        return $this->handlingTime;
    }

    /**
     * @param array $handlingTime
     */
    public function setHandlingTime(array $handlingTime): void
    {
        $this->handlingTime = $handlingTime;
    }

    /**
     * @return array
     */
    public function getBarcode(): array
    {
        return $this->barcode;
    }

    /**
     * @param array $barcode
     */
    public function setBarcode(array $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return array
     */
    public function getEan(): array
    {
        return $this->ean;
    }

    /**
     * @param array $ean
     */
    public function setEan(array $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return string|null
     */
    public function getCommission(): ?string
    {
        return $this->commission;
    }

    /**
     * @param string|null $commission
     */
    public function setCommission(?string $commission): void
    {
        $this->commission = $commission;
    }

    /**
     * @return array
     */
    public function getValidationStatus(): array
    {
        return $this->validationStatus;
    }

    /**
     * @param array $validationStatus
     */
    public function setValidationStatus(array $validationStatus): void
    {
        $this->validationStatus = $validationStatus;
    }

    /**
     * @return array
     */
    public function getOfferValidationStatus(): array
    {
        return $this->offerValidationStatus;
    }

    /**
     * @param array $offerValidationStatus
     */
    public function setOfferValidationStatus(array $offerValidationStatus): void
    {
        $this->offerValidationStatus = $offerValidationStatus;
    }

    /**
     * @return bool
     */
    public function isOwnership(): bool
    {
        return $this->ownership;
    }

    /**
     * @param bool $ownership
     */
    public function setOwnership(bool $ownership): void
    {
        $this->ownership = $ownership;
    }

    /**
     * @return float|null
     */
    public function getBestOfferSalePrice(): ?float
    {
        return $this->bestOfferSalePrice;
    }

    /**
     * @param float|null $bestOfferSalePrice
     */
    public function setBestOfferSalePrice(?float $bestOfferSalePrice): void
    {
        $this->bestOfferSalePrice = $bestOfferSalePrice;
    }

    /**
     * @return float|null
     */
    public function getBestOfferRecommendedPrice(): ?float
    {
        return $this->bestOfferRecommendedPrice;
    }

    /**
     * @param float|null $bestOfferRecommendedPrice
     */
    public function setBestOfferRecommendedPrice(?float $bestOfferRecommendedPrice): void
    {
        $this->bestOfferRecommendedPrice = $bestOfferRecommendedPrice;
    }

    /**
     * @return int
     */
    public function getNumberOfOffers(): int
    {
        return $this->numberOfOffers;
    }

    /**
     * @param int $numberOfOffers
     */
    public function setNumberOfOffers(int $numberOfOffers): void
    {
        $this->numberOfOffers = $numberOfOffers;
    }

    /**
     * @return string|null
     */
    public function getRrpGuidelines(): ?string
    {
        return $this->rrpGuidelines??null;
    }

    /**
     * @param string|null $rrpGuidelines
     */
    public function setRrpGuidelines(?string $rrpGuidelines): void
    {
        $this->rrpGuidelines = $rrpGuidelines;
    }


}