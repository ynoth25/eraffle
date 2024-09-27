<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'poster',
        'terms_and_conditions',
    ];

    /**
     * Get the prizes for the promo.
     */
    public function prizes()
    {
        return $this->hasMany(Prize::class);
    }

    /**
     * Get the FAQs for the promo.
     */
    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    /**
     * Get the entries for the promo.
     */
    public function entries()
    {
        return $this->hasMany(Entry::class);
    }

    /**
     * Get the entries for the promo.
     */
    public function serialNumbers()
    {
        return $this->hasMany(Validation::class);
    }

    /**
     * Get the entries for the promo.
     */
    public function rafflePicks()
    {
        return $this->hasMany(RafflePick::class);
    }
}
