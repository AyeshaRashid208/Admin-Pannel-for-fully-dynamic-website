<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BlogSecondSection extends Model
{
    use HasFactory;
    protected $table = 'blogsecondsections';
    protected $fillable =[
        
        'image',
        'title',
        'description',
        'date',
        'name',
       
    ];
}
