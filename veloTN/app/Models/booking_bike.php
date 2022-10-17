<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @mixin Builder
 */
class booking_bike extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_full_name',
        'email',
        'city',
        'quantite',
        'start_date',
        'end_date',
        'nbr_jour',
        'status',
        'bike_id',
    ];

    /**
     * Get the bike associated with the reservation.
     */
    public function bike()
    {
        return $this->belongsTo(bike::class);
    }
}
