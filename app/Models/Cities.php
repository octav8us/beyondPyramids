<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cities extends Model
{
    protected $guarded =[];


    public function places(){

        return $this -> hasMany(places::class);

    }


    use HasFactory;
}
