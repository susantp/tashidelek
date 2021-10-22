<?php

namespace App\Imports\Sheets;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class Items implements ToModel, WithUpserts, WithHeadingRow
{

    private $menus;

    public function __construct()
    {
        $this->menus = Menu::select(['id', 'title', 'slug'])->get();
    }

    public function model(array $row)
    {
        $menu = $this->menus->where('slug', Str::slug($row['menu']))->first();
        return new Item([
            'menu_id' => $menu->id ?? '',
            'name' => Str::lower(trim($row['name'])),
            'slug' => Str::slug($row['name']),
            'description' => $row['description'] ?? null,
            'price_offer' => $row['offer'] ?? null,
            'price' => floatval($row['price']),
            'row_order' => $row['order']
        ]);
    }

    public function uniqueBy(): string
    {
        return 'slug';
    }
}
