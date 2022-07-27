<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HomeSevenSection extends Model
{
    use HasFactory;
    protected $table = 'homesevensections';
    protected $fillable =[
        
        'image',
        'title',
        'author_image',
        'name',
        'time',
       
    ];
}
