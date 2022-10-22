<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fondateur extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'url',];
    public function associations() {
        return $this->hasMany(Assocaition::class);
    }
}
