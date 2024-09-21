<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status',
        'serial_number',
    ];


    /**
     * Get the user that owns the entry.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the promo that owns the entry.
     */
    public function promo()
    {
        return $this->belongsTo(Promo::class);
    }

    /**
     * Get the validations for the entry.
     */
    public function validations()
    {
        return $this->hasMany(Validation::class);
    }

    /**
     * Get the raffle picks for the entry.
     */
    public function rafflePicks()
    {
        return $this->hasMany(Rafflepick::class);
    }
}
