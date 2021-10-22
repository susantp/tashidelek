<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservationType extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}
