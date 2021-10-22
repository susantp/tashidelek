<?php

namespace App\Imports;

use App\Imports\Sheets\Menus;
use App\Imports\Sheets\Items;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class DataImport implements WithMultipleSheets
{
    private string $sheet;

    public function __construct(string $sheet)
    {
        $this->sheet = Str::slug($sheet);
    }


    public function sheets(): array
    {
        $selectedSheet = [];
        switch ($this->sheet) {
            case 'menus':
                $selectedSheet['Menus'] = new Menus();
                break;
            case 'items':
                $selectedSheet['Items'] = new Items();
                break;
        }
        return $selectedSheet;
    }
}
