<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address','url','numero','fondateur_id',];
    public function fondateur()
    {
        return $this->belongsTo(Fondateur::class);
    }
}
