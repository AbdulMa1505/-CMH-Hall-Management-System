<?php

namespace App\Models;
use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillables =[
        'first_name','last_name','gender','email',
        'phone_number','program','residential_stauts'
    ];
}
