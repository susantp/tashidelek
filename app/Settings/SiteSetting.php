<?php

namespace App\Settings;

class SiteSetting extends \Spatie\LaravelSettings\Settings
{
    public string $forOrder;
    public string $address;
    public string $fax;
    public string $openingHours;
    public string $email;
    public string $siteName;
    public string $facebookUrl;
    public string $yelpUrl;
    public string $instagramUrl;
    public string $toastabUrl;

    public static function group(): string
    {
        return 'site';
    }


}
