<?php

namespace Huellas\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer                                  id
 * @property string                                   email
 * @property string                                   username
 * @property string                                   image
 * @property string                                   bio
 * @property string                                   token
 * @property string                                   password
 * @property \Carbon\Carbon                           created_at
 * @property \Carbon\Carbon                           update_at
 * @property \Illuminate\Database\Eloquent\Collection followings Users who are followed by this user
 */
class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}