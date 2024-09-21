<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'description',
        'promo_id',
        'status'
    ];

    /**
     * Get the promo that owns the prize.
     */
    public function promo()
    {
        return $this->belongsTo(Promo::class);
    }
}
