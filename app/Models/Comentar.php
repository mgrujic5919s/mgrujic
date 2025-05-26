<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentar extends Model
{

    protected $fillable = [
        'komentar',
        'katalog_id',
    ];

    public function katalog() {
        return $this->belongsTo(Katalog::class);
    }
}
