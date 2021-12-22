<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class stockportfolio extends Model
{
    use HasFactory;
    protected $fillable = ["image", "price" , "date" , "profit" , "duration" ,  "created_at", "updated_at"];
    

   
}
