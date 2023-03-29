<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    use HasFactory;

    //un tema pertenece a una asignatura  BelongsTo es pertenece a 
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
