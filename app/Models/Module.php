<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Model;

class Module extends Model
{
    public function _store($request)
    {
        $this->name         = $request->input('name');
        $this->description  = $request->input('description');
        $this->route_name   = $request->input('route_name');
        $this->is_enabled   = $request->input('is_enabled');
        $this->created_by   = Auth::id();
        $this->save();
    }

    public function _update($request)
    {
        $this->name         = $request->input('name');
        $this->description  = $request->input('description');
        $this->route_name   = $request->input('route_name');
        $this->is_enabled   = $request->input('is_enabled');
        $this->updated_by   = Auth::id();
        $this->update();
    }
}
