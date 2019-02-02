<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruser extends Model
{
        //Table name
    protected $table = "user";
    //  all columns
    protected $fillable =[
    "id",
    "name",
    "address",
    "contactno",
    "email",
    "password",
    "securityquestion",
    "securityanswer",
    "created_at",
    "updated_at"
	];
}
