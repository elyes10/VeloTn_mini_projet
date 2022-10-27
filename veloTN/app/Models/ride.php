<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ride extends Model
{
    use HasFactory;
    public function event()
    {
        return $this->belongsTo(event::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'destination',
        'startedAt',
        'event_id',
    ];
}
