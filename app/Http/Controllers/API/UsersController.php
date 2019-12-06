<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserProfile;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = User::orderBy('created_at', 'desc')->get();

        return $class;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = User::find($id);

        if(!$class) return abort(404, 'Resource not found');

        return $class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new User;
        
        $class->_store($request);

        $class->userProfile()->save(UserProfile::_store($request));

        return $class->find($class->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = User::find($id);

        if(!$class) return abort(404, 'User not found');

        $class->_update($request);

        return $class;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = User::find($id);

        if(!$class) return abort(404, 'User not found');

        $class->userProfile()->delete();

        $class->delete();

        return response(['message' => 'User has been deleted!'], 200);
    }
}
