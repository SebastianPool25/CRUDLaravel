<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class Cornellnote extends Model
{
    use HasFactory;

     //relacion con con los users
     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class);
     }
 
     //relacion con las topics
     public function topic(): BelongsTo
     {
         return $this->belongsTo(Topic::class);
     }
        // mayuscula
        public function getTituloAttribute($value)
        {
            return strtoupper($value);
        }
            // Mostrar la conclusión en mayuscula
        public function getConclusionAttribute($value)
        {
            return strtoupper($value);
        }
    
            // el titulo en minusculas
        public function setTituloAttribute($value)
        {
            $this->attributes['titulo'] = strtolower($value);
        }
            // el texto en minusculas
        public function setTextoAttribute($value)
        {
            $this->attributes['apuntes'] = strtolower($value);
        }
            // la conclusión en minusculas
        public function setConclusionAttribute($value)
        {
            $this->attributes['conclusion'] = strtolower($value);
        }
            // keywords se guardará como un array sin los espacios
        public function setPalabrasClaveAttribute($value)
        {
            $this->attributes['keywords'] = str_replace(' ', '', $value);
        }
    }

