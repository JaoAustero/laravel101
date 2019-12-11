<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Model;

class UserProfile extends Model
{

    public static function _store($request)
    {
        $userprofile = new self;
        $userprofile->first_name = $request->input('first_name');
        $userprofile->last_name = $request->input('last_name');
        $userprofile->contact_number = $request->input('contact_number');
        $userprofile->avatar_photo = $request->input('avatar_photo');
        $userprofile->created_by = Auth::id();
        
        return $userprofile;
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function toArray()
    {
        $arr = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'contact_number' => $this->contact_number,
            'avatar_photo' => $this->avatar_photo,
        ];

        return $arr;
    }
}
