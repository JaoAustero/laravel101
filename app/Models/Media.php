<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Model;

class Media extends Model
{
    public function basicInfo()
    {
        $arr = [
            'id' => $this->id,
            'type' => $this->type,
            'size' => $this->size,
            'path' => $this->path
        ];

        return $arr;
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'mediable_type' => $this->mediable_type,
            'mediable_id' => $this->mediable_id,
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'size' => $this->size,
            'path' => $this->path,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ];

        return $arr;
    }
}
