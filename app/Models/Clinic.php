<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Clinic extends Model
{
    use HasFactory;
    protected $fillable = ['name','username','phone','email','address','password','city','logo','images'];
    protected $casts = [
        'images' => 'array'
    ];

}
