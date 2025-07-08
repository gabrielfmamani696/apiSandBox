<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    //
    // protected $table = 'usuarios';

    public function ordenes(): HasMany
    {
        return $this->hasMany(Orden::class);
    }
}
