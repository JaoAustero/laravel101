<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Model;

class Permission extends Model
{
    public function _store($request)
    {
        $this->role_id      = $request->input('role_id');
        $this->module_id    = $request->input('module_id');
        $this->access       = $request->input('access');
        $this->index        = $request->input('index');
        $this->store        = $request->input('store');
        $this->show         = $request->input('show');
        $this->update       = $request->input('update');
        $this->destroy      = $request->input('destroy');
        $this->created_by   = Auth::id();
        $this->save();
    }

    public function _update($request)
    {
        $this->role_id      = $request->input('role_id');
        $this->module_id    = $request->input('module_id');
        $this->access       = $request->input('access');
        $this->index        = $request->input('index');
        $this->store        = $request->input('store');
        $this->show         = $request->input('show');
        $this->update       = $request->input('update');
        $this->destroy      = $request->input('destroy');
        $this->updated_by   = Auth::id();
        $this->update();
    }
}
