<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ServiceFourthSection extends Model
{
    use HasFactory;
    protected $table = 'servicefourthsections';
    protected $fillable =[
        'message',
        'heading',
        'tab_one_name',
        'plan_one_heading',
        'plan_one_desc',
        'price_one',
        'feature_one',
        'feature_two',
        'feature_thr',
        'feature_four',
        'recom',
        'plan_two_heading',
        'plan_two_desc',
        'price_two',
        'P_feature_one',
        'P_feature_two',
        'P_feature_thr',
        'P_feature_four',
        'plan_thr_heading',
        'plan_thr_desc',
        'price_thr',
        'Pt_feature_one',
        'Pt_feature_two',
        'Pt_feature_thr',
        'Pt_feature_four',
        
       
    ];
}
