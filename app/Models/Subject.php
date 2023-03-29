<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    //una asignatura tiene muchos temas
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    public function bugs(): HasMany
    {
        return $this->hasMany(Bug::class);
    }
}
