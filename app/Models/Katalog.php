<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $fillable = [
        'videoigra',
        'cena',
        'zanr_id',
        'platforma_id',
    ];

    public function zanr() {
        return $this->belongsTo(Zanr::class);
    }

    public function platforma() {
        return $this->belongsTo(Platforma::class);
    }

    public function comentari() {
        return $this->hasMany(Comentar::class);
    }

}
