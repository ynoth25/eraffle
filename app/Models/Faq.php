<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'promo_id',
        'question',
        'answer',
    ];

    /**
     * Get the promo that owns the FAQ.
     */
    public function promo()
    {
        return $this->belongsTo(Promo::class);
    }
}
