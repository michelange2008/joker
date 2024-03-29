<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spore extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function cartes() : BelongsToMany {
        return $this->belongsToMany(Carte::class);
    }

    public function type() : BelongsTo {
        return $this->belongsTo(Type::class);
    }
}
