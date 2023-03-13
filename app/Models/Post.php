<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    //ESTO ES MI LISTA BLANCA QUE TIENE LOS CAMPOS QEU QUIERO QUE SE GUARDEN EN LA BASE DE DATOS
    protected $fillable= [

        'title',
        'slug',
        'body',
        'category_id',
        'user_id'
    ];


    // ESTO ES MI LISTA NEGRA QUE TIENE LOS CAMPOS QUE NO QUIERO QUE SE GUARDEN
    protected $guarded= [
        'id',
        'created_at',
        'updated_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
