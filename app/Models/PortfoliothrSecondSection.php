<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PortfoliothrSecondSection extends Model
{
    use HasFactory;
    protected $table = 'portfoliogallerys';
    protected $fillable =[
       
       
        'image',
        'title',
        'description',
        'catagory',
        
       
    ];
}
