<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BlogSingle extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable =[
        
        'date',              
        'name',
        'title',
        'fimage',
        'one',
        'two',
        'image_one',
        'image_two',
        'heading',
        'three',
        'quote',
        'catagory',
        'tag_one',
        'tag_two',
        'tag_three',
        'tag_four',
        
       
    ];
}

         