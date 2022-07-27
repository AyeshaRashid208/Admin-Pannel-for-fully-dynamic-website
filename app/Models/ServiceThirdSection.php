<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ServiceThirdSection extends Model
{
    use HasFactory;
    protected $table = 'servicesplans';
    protected $fillable =[
        'name',       
        'description',
        'hidden_id',
        'price',
        'one',
        'two',
        'three',
        'four',
        
       
    ];
}
