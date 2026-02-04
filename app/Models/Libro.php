<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'editorial',
        'precio',
        'año_publicacion',
        'descripcion'
    ];

    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    public function generos() {
        return $this->belongsToMany(Genero::class, 'generos_libros');
    }
}
