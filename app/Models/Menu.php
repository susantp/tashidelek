<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function getThumbnailUrlAttribute()
    {
        return config('app.url') . Storage::url('menuImages/' . $this->attributes['thumbnail']);
    }

    public function getBgImageUrlAttribute()
    {
        return config('app.url' . Storage::url('menuImages/bg/' . $this->attributes['bg_image']));
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
