<?php

namespace App\Http\Models\Everan;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //字段白名单
    protected $fillable = ['username', 'password', 'headingurl', 'sex', 'role', 'mobile', 'openid', 'status'];
}
