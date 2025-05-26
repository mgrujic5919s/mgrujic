<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    protected $fillable = [
        'naziv',
        'opis',
    ];

    public function katalozi() {
        return $this->hasMany(Katalog::class);
    }
}
