<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\Model;

class Post extends Model
{

    public function _store($request)
    {
        $this->category_id  = $request->input('category_id');
        $this->title        = $request->input('title');
        $this->body         = $request->input('body');
        $this->created_by   = Auth::id();
        $this->save();
    }

    public function _update($request)
    {
        $this->category_id  = $request->input('category_id');
        $this->title        = $request->input('title');
        $this->body         = $request->input('body');
        $this->updated_by   = Auth::id();
        $this->update();
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function media()
    {
        return $this->belongsTo('App\Models\Media', 'id');
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'category' => $this->category->basicInfo(),
            'media' => $this->media->basicInfo(),
            'title' => $this->title,
            'body' => $this->body,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];

        return $arr;
    }
}
