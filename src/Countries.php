<?php
declare(strict_types=1);

namespace Stellion\Emag;

enum Countries
{
    case BG;
    case RO;
    case PL;
    case HU;


    public function endpoint()
    {
        return match ($this) {
            Countries::BG => 'https://marketplace-api.emag.bg/api-3',
            Countries::RO => 'https://marketplace-api.emag.ro/api-3',
            Countries::PL => 'https://marketplace-api.emag.pl/api-3',
            Countries::HU => 'https://marketplace-api.emag.hu/api-3'
        };
    }

    public function currency()
    {
        return match ($this) {
            Countries::BG => 'BGN',
            Countries::RO => 'RON',
            Countries::PL => 'PLN',
            Countries::HU => 'HUF'
        };
    }

    public function domain()
    {
        return match ($this) {
            Countries::BG => 'emag.bg',
            Countries::RO => 'emag.ro',
            Countries::PL => 'emag.pl',
            Countries::HU => 'emag.hu'
        };
    }

    public static function fromCountryCode(string $countryCode): Countries
    {
        $countryCode = strtolower($countryCode);
        return match ($countryCode) {
            'bg' => Countries::BG,
            'ro' => Countries::RO,
            'pl' => Countries::PL,
            'hu' => Countries::HU
        };
    }
}