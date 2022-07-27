<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ServiceSecondSection extends Model
{
    use HasFactory;
    protected $table = 'servicesecondsections';
    protected $fillable =[
        'message',
        'heading',
        'image',
        'title',
        'description',
        
       
    ];
}
