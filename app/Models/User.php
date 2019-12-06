<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function _store($request)
    {
        $this->role_id          = $request->input('role_id');
        $this->email            = $request->input('email');
        $this->password         = bcrypt($request->input('password'));
        $this->is_enabled       = 0;
        $this->is_activated     = 0;
        $this->timezone         = 'UTC';
        $this->api_token        = Str::random(60);
        $this->created_by       = 1;
        $this->save();
    }

    public function _update($request)
    {
        $this->role_id              = $request->input('role_id');
        $this->email                = $request->input('email');
        $this->password             = bcrypt($request->input('password'));
        $this->timezone             = $request->input('timezone');
        $this->update();

        $profile                    = UserProfile::where('user_id', $this->id)->first();
        $profile->user_id           = $this->id;
        $profile->first_name        = $request->input('first_name');
        $profile->last_name         = $request->input('last_name');
        $profile->contact_number    = $request->input('contact_number');
        $profile->updated_by        = 1;
        $profile->update();
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function userProfile()
    {
        return $this->hasOne('App\Models\UserProfile');
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'role' => $this->role->basicInfo(),
            'email' => $this->email,
            'is_enabled' => $this->is_enabled,
            'is_activated' => $this->is_activated,
            'user_profile' => $this->userProfile
        ];

        return $arr;
    }
}
