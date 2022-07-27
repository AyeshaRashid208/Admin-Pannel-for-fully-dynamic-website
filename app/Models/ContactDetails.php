<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ContactDetails extends Model
{
    use HasFactory;
    protected $table = 'contactdetails';
    protected $fillable =[
        
        'street',
        'state',
        'phone',
        'email',
        
       
    ];
}
