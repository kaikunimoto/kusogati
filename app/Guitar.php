<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    protected $table = 'guitars';

    public function getList()
    {
        return self::all();
    }
}
