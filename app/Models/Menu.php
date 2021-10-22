<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        return secure_asset('storage/menuImages/' . $this->attributes['thumbnail']);
    }

    public function getBgImageUrlAttribute()
    {
        return secure_asset('storage/menuImages/bg/' . $this->attributes['bg_image']);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'menu_id', 'id');
    }


    /* public function getThumbnailAttribute($value){
         return Str::slug($value);
     }

     public function getBgImageAttribute($value){
         return Str::slug($value);
     }
     public function setThumbnailAttribute($value){
         $this->attributes['thumbnail'] = Str::slug($value);
     }
     public function setBgImageAttribute($value){
         $this->attributes['bg_image'] = Str::slug($value);

     }*/
}
