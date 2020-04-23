<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'dni' , 'email' , 'addres'];
}
