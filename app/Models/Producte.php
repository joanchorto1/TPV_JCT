<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    protected $table = 'productes';

    protected $fillable = [
        'nom',
        'preu',
        'categoria_id'
    ];
    //Relacion con categoria un producto pertenece a una categoria una categoria tiene muchos productos
    public function categoria(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Categoria');
    }



    use HasFactory;
}
