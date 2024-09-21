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
        'prize_id',
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

    /**
     * Get the promo that owns the raffle pick.
     */
    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }
}
