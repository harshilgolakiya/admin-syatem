<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
        //Table name
    protected $table = "city";
    //  all columns
    protected $fillable =[
    "id",
    "City_name",
    "created_at",
    "updated_at"
	];
}
