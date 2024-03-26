<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carte extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function jeu() : BelongsToMany {
        return $this->belongsToMany(Jeu::class);
    }

    public function spores() : BelongsToMany {
        return $this->belongsToMany(Spore::class);
    }

    public function type() : BelongsTo {
        return $this->belongsTo(Type::class);
    }
}
