<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cornellnote extends Model
{
    use HasFactory;

     //relacion con con los users
     public function users(): BelongsTo
     {
         return $this->belongsTo(User::class);
     }
 
     //relacion con las topics
     public function topcis(): BelongsTo
     {
         return $this->belongsTo(Topic::class);
     }
 }

