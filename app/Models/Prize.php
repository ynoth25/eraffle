<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prize extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'description',
        'promo_id',
        'status',
        'quantity'
    ];

    /**
     * Get the promo that owns the prize.
     */
    public function promo()
    {
        return $this->belongsTo(Promo::class);
    }
}
