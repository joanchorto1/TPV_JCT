<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nom',

    ];
    protected $table = 'categorias';

    //Una categoria tiene muchos productos
    public function productes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Producte');
    }



    use HasFactory;
}
