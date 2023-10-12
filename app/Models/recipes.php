<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class recipes extends Model
{
    protected $fillable =[
        'title',
        'description',
        'ingredients',
        'photo',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
