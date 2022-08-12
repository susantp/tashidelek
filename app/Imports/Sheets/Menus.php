<?php

namespace App\Imports\Sheets;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithUpserts;

class Menus implements ToModel, WithUpserts, \Maatwebsite\Excel\Concerns\WithHeadingRow
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
            'thumbnail' => $row['thumbnail'] ?? "",
            'bg_image' => $row['bg_image'] ?? "",
            'status' => $row['status'] ?? 1,
            'row_order' => $row['order'] ?? 1
        ]);
    }

    public function uniqueBy(): string
    {
        return 'slug';
    }
}
