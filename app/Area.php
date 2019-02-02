<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
      //Table name
    protected $table = "area";
    //  all columns
    protected $fillable =[
    "id",
    "Name",
    "City_id",
    "created_at",
    "updated_at"
	];
}
