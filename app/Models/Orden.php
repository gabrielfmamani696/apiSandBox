<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orden extends Model
{
    //
    protected $table = 'ordenes';

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }
}
