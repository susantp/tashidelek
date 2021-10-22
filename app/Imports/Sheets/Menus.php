<?php

namespace App\Imports\Sheets;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menus implements \Maatwebsite\Excel\Concerns\ToModel, \Maatwebsite\Excel\Concerns\WithUpserts, \Maatwebsite\Excel\Concerns\WithHeadingRow
{

    /**
     * @inheritDoc
     */
    public function model(array $row)
    {
        return new Menu([
            'title' => $row['title'],
            'description' => $row['description'],
            'slug' => Str::slug($row['title']),
            'thumbnail' => $row['thumbnail'] ?? null,
            'bg_image' => $row['bg_image'] ?? null,
            'status' => $row['status'] ?? 1,
            'row_order' => $row['order']
        ]);
    }

    public function uniqueBy(): string
    {
        return 'slug';
    }
}
