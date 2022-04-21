<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Szakdolgozat extends Model
{
    protected $primaryKey = 'id';
    protected $munkaido = ['id', 'szakdoga_nev', 'githublink', 'oldallink', 'tagokneve'];
}
