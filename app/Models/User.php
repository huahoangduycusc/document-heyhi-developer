<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;
    protected $table = 'organizations';
    public $fillable = ['contact_name', 'company_name','login_token','api_key', 'access_token', 'public_id','guest_camera','guest_voice','guest_limit', 'login_required','accepted_emails', 'anyone_can_share'];

    protected $hidden = [
        'password', 'remember_token', 'access_token','api_key'
    ];
}
