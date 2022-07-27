<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HomeThirdSection extends Model
{
    use HasFactory;
    protected $table = 'homethirdsections';
    protected $fillable =[
        'name',
        'description',
        'detail',
        'title_one',
        'desc_one',
        'title_two',
        'desc_two',
        'title_thr',
        'desc_thr',
        'hidden_id',
        'image',
       
    ];
}
