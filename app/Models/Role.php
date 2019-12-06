<?php

namespace App\Models;

use App\Models\Model;

class Role extends Model
{
    public function _store($request)
    {
        $this->name         = $request->input('name');
        $this->created_by   = 1;
        $this->save();
    }

    public function _update($request)
    {
        $this->name         = $request->input('name');
        $this->updated_by   = 1;
        $this->update();
    }

    public function basicInfo()
    {
        $arr = [
            'id' => $this->id,
            'name' => $this->name
        ];

        return $arr;
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'name' => $this->name,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at
        ];

        return $arr;
    }
}
