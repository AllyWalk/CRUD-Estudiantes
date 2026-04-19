<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Campos que permitimos llenar mediante formularios (Mass Assignment)
    protected $fillable = [
        'nombre', 
        'apellido', 
        'email', 
        'matricula', 
        'semestre', 
        'career_id'
    ];

    /**
     * Relación: Un estudiante pertenece a una carrera.
     * Esto permite hacer $student->career->nombre en la vista.
     */
    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}