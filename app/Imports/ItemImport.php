<?php

namespace App\Imports;

use App\Item;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class ItemImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Model|null
     */
    public function model(array $row)
    {
        return new \App\Models\Item([
            'menu_id' => 65,
            'name' => $row[0],
            'description' => $row[1],
            'price' => $row[2]
        ]);
    }
}
