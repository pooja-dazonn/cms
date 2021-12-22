<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadsmodel extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email' , 'phone', 'city', 'category' , 'subcategory' , 'product'];
    public $timestamaps=false;
}
