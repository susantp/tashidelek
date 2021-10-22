<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function getPriceAttribute($value)
    {
        return ($value) * 0.01;
    }

    public function setPriceAttribute($value)
    {
        Log::info(gettype($value));
        $this->attributes['price'] = $value * 100;
    }
}
