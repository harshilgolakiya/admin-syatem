<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    //Table name
    protected $table = "lawyer";
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
