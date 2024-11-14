<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RafflePick extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'promo_id',
        'entry_id',
        'pick_date',
        'is_winner',
    ];

    /**
     * Get the entry that owns the raffle pick.
     */
    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}
