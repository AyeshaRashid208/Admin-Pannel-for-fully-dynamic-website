<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BlogCatagory extends Model
{
    use HasFactory;
    protected $table = 'catagorys';
    protected $fillable =[
        
        'catagory',
       
        
       
    ];
}
