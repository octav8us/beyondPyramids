<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{

    protected $guarded = [];

    public $timestamps = false;

    public function cities(){

        return $this ->belongsTo(Cities::class);


    }


    use HasFactory;
}
