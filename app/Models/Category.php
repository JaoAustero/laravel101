<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Model;

class Category extends Model
{
    public function _store($request)
    {
        $this->name         = $request->input('name');
        $this->created_by   = Auth::id();
        $this->save();
    }

    public function _update($request)
    {
        $this->name         = $request->input('name');
        $this->updated_by   = Auth::id();
        $this->update();
    }

    public function basicInfo()
    {
        $arr = [
            'id'    => $this->id,
            'name'  => $this->name
        ];

        return $arr;
    }

    public function toArray()
    {
        $arr = [
            'id'            => $this->id,
            'name'          => $this->name,
            'created_at'    => $this->created_at,
            'created_by'    => $this->created_by,
            'updated_at'    => $this->updated_at,
            'updated_by'    => $this->updated_by
        ];

        return $arr;
    }
}
