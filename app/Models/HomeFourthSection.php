<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HomeFourthSection extends Model
{
    use HasFactory;
    protected $table = 'homefourthsections';
    protected $fillable =[
        'icon',
        'title',
        'description',
       
    ];
}
