<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    //Relacion de pertenencia con subjects
    public function subjects():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    //relacion de 1 a * con cornellnotes
    public function cornellnotes():HasMany
    {
        return $this->hasMany(Cornellnote::class);
    }
}