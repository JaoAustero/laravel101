<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Closure;

use App\Models\Role;
use App\Models\Module;
use App\Models\Permission;
use App\Models\User;

class AuthenticatePermission
{
    public $guarded_methods = 
    [
        'access',
        'index',
        'store',
        'update',
        'destroy'
    ];

    public $message =
    [
        'access'    => 'You do not have permission to access this page.',
        'index'     => 'You do not have permission to load resourcess.',
        'store'     => 'You do not have permission to create a resource.',
        'update'    => 'You do not have permission to update a resource.',
        'destroy'   => 'You do not have permission to delete a resource.'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get accessing route's method
        $accessing_method = Route::getCurrentRoute()->getActionMethod();

        // Check the access method if existin in the array
        // of guarded methods
        if (in_array($accessing_method, $this->guarded_methods)):
            
            // Check the auth if the role is super user
            if (!self::isSuperUser($request)):
                self::gate($request);
            endif;

        endif;

        return $next($request);
    }

    /**
     * Check logged in user's role id: Superuser roles are always allowed
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    protected function isSuperUser($request)
    {
        return Auth::user()->role_id === 1;
    }

    /**
     * Determine whether the user's role has an
     * access permission to a certain module
     * 
     * @return bool
     */
    protected function gate($request)
    {
        // Get the role id of the current logged in
        $role_id = Auth::user()->role_id;

        // Get accessing route's name: e.g. roles.index
        $route_name = self::formRoute(Route::getCurrentRoute()->getName());

        // throws 400 Bad Request ErrorException
        if (is_null($route_name))
            return abort(400, 'Route name not found');

        // Get module of accessing route's name e.g. roles
        $module = Module::where('route_name', $route_name[0])->first();

        if (is_null($module))
            return abort(403, 'You do not have permission to perform this action');

        $action = strtolower($route_name[1]);
        $permissions = Permission::where('role_id', $role_id)
                        ->where('module_id', $module->id)
                        ->where($action, 1)->first();
        
        if (is_null($permissions))
            return abort(403, $this->message[$action]);
        
        return true;
    }

    /**
     * Dynamically form long route name
     * to be handled in gate()
     * 
     * @param Route name
     */
    private function formRoute($route_name)
    {
        $exploded_route = explode('.', $route_name);

        if(count($exploded_route) == 2)
            return $exploded_route;

        foreach($exploded_route as $key => $value):
            if($key != count($exploded_route)-1): //check if $key is not the last index
                if($key != count($exploded_route)-2):
                    $indexes .= $value . '-';
                else:
                    $indexes .= $value;
                endif;
            endif;
        endforeach;

        $formed_route[0] = $indexes;
        $formed_route[1] = end($exploded_route);

        return $formed_route;
    }
}
