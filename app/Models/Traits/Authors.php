<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Auth;

trait Authors
{
    /* 
        * Get the creator's model of Role
        *
        * @return App\Models\Administration\User
        */
    public function creator()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    /**
     * Get the updater's model of Role
     * 
     * @return App\Models\Administration\User
    */
    public function editor()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }

    /**
     * Get the deleter's model of Role
     * 
     * @return App\Models\Administration\User
    */
    public function deleter()
    {
        return $this->belongsTo('App\Models\User', 'deleted_by');
    }
}

?>