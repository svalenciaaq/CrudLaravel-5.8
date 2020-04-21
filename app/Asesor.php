<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $fillable = ['name', 'dni' , 'tel' , 'date' , 'gen' , 'client' , 'sede' , 'age'];
}
