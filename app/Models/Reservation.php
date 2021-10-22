<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'meta' => 'array'
    ];

    public function types(): HasMany
    {
        return $this->hasMany(ReservationType::class);
    }

    public function setMetaAttribute($value)
    {
        $this->attributes['meta'] = json_encode($value, true);
    }
}
