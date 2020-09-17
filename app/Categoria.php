<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
    protected $table='categorias';

    protected $fillable = [
        'idCategoria', 
        'nombreCategoria',
        'descripcionCategoria',
        'created_at',
        'updated_at'
    ];

    public static function guardarCategoria($nombreCategoria,$descripcionCategoria,$created_at)
    {
        DB::table('categorias')->insert([
            'nombreCategoria'       =>  $nombreCategoria, 
            'descripcionCategoria'  =>  $descripcionCategoria,
            'created_at'            =>  $created_at
        ]);
    }

    public static function listaCategoria()
    {
        return DB::table('categorias')
        ->select('categorias.*')
        ->orderBy('categorias.idCategoria', 'desc')
        ->get();
    }
}
