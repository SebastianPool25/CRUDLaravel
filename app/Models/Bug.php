<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bug extends Model
{
    use HasFactory;
    
    public function subjects(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
