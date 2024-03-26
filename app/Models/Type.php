<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function cartes() : HasMany {
        return $this->hasMany(Carte::class);
    }
}
