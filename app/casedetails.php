<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\casedetails;

class casedetails extends Model
{
    // Table Name
    protected $table = "casedetails";
    // ALL Columns
    protected $fillable =[
    	"id",
    	"User_id",
    	"Title",
    	"Description",
    	"Lawyer_id",
    	"created_at",
    	"updated_at"
    ];
}
