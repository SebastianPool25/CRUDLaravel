<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bug extends Model
{
    use HasFactory;
    
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
     // ---------- ACCESORS ----------
        // la Descripcion se mostrara en minusculas con la primera letra en mayuscula
        public function getDescripcionAttribute($value)
        {
            return ucfirst(strtolower($value));
        }
    
            // el Codigo se muestra en mayusculas
        public function getCodigoAttribute($value)
        {
            return strtoupper($value);
        }
    
            // la Solucion se mostrara en minusculas con la primera letra en mayuscula
        public function getSolucionAttribute($value)
        {
            return ucfirst(strtolower($value));
        }
    
            // la Plataforma se mostrara en mayusculas
        public function getPlataformaAttribute($value)
        {
            return strtoupper($value);
        }
    
            // los Estados se mostraran como strings dependiendo el numero
        public function getEstadoAttribute($value)
        {
            $estado = [
                1 => 'Corregido',
                2 => 'No corregido',
                3 => 'En proceso',
                4 => 'No oficial',
                5 => 'Error de la versión'
            ];
    
            return $estado[$value] ?? 'Desconocido';
        }
        //-------------------------------
    
        // ---------- MUTATORS ----------
            // la Descripcion se guardara en minusculas
        public function setDescripcionAttribute($value)
        {
            $this->attributes['description'] = strtolower($value);
        }
            // el Codigo se guardara en minusculas
        public function setCodigoAttribute($value)
        {
            $this->attributes['codigo'] = strtolower($value);
        }
            // la Solucion se guardara en minusculas
        public function setSolucionAttribute($value)
        {
            $this->attributes['solution'] = strtolower($value);
        }
            // la Plataforma se guardara en minusculas
        public function setPlataformaAttribute($value)
        {
            $this->attributes['plataforma'] = strtolower($value);
        }
    
}
