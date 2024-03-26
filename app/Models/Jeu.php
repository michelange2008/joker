<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jeu extends Model
{
    protected $guarded = [];

    public function cartes() : BelongsToMany {
        return $this->belongsToMany(Carte::class);
    }
}
