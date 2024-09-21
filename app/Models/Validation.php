<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    protected $table = 'valid_sachets';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'serial_number',
        'status',
        'promo_id',
    ];

    /**
     * Promo relationship
     */
    public function promo()
    {
        return $this->belongsTo(promo::class);
    }
}
