<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streamers extends Model
{
    use HasFactory;
    //que estos campos se puedan recoger de un formulario en forma de array
    protected $fillable=['id','nombre','apellido','tipo','contenido','viewers','pais'];
}
