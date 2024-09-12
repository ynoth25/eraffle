<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'entry_id',
        'validated_by',
        'validation_code',
        'validation_status',
        'comments',
        'validation_date',
    ];


    /**
     * Get the entry that owns the validation.
     */
    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }

    /**
     * Get the admin that validated the entry.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'validated_by');
    }
}
