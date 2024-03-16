<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiquet extends Model
{
    protected $table = 'tiquets';
    protected $fillable = [
        'data',
        'hora',
        'productes_id',
        'preu_total',
    ];
    public function productes(){
        return $this->hasMany('App\Models\Producte');
    }
    use HasFactory;
}
