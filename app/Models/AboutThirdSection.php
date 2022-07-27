<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AboutThirdSection extends Model
{
    use HasFactory;
    protected $table = 'aboutthirdsections';
    protected $fillable =[
        'message',
        'heading',
        'main_title',
        'description',
        'skill_one',
        'skill_two',
        'skill_three',
       
    ];
}
