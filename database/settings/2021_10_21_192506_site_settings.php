<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class SiteSettings extends SettingsMigration
{
    public function up(): void
    {
$this->migrator->add('site.forOrder', '(510) 232-9316');
$this->migrator->add('site.address', '11224 San Pablo Ave El Cerrito, CA 94530');
$this->migrator->add('site.fax', '(510) 778-1639');
$this->migrator->add('site.openingHours', 'Mon – Sat: 9:00–18:00');
$this->migrator->add('site.email', 'tashidelekcuisine@gmail.com');
$this->migrator->add('site.siteName', 'Tashi Delek Restaurant');
$this->migrator->add('site.facebookUrl', 'https://www.facebook.com/tashidelek.2013');
$this->migrator->add('site.yelpUrl', 'https://www.yelp.com/biz/tashi-delek-el-cerrito');
$this->migrator->add('site.instagramUrl', 'https://www.instagram.com/tashidelekcuisine');
$this->migrator->add('site.toastabUrl', 'https://www.toasttab.com/tashi-delek/v3');
    }
}
