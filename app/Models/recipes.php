<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipes extends Model
{
    protected $fillable =[
        'string',
        'description',
        'ingredients',
        'photo',
        'id_user',
    ];
}
