<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cities extends Model
{
    protected $guarded =[];
    public $timestamps = false;


    public function places(){

        return $this -> hasMany(Places::class);

    }
    public function UserFavourited (){

        return $this -> belongsToMany(User::class);
    }


    use HasFactory;
}
