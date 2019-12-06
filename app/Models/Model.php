<?php
    
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Traits\Authors;

class Model extends Eloquent
{
    use Authors;

    public static function findOrDie($id)
    {
        $_instance = self::find($id);

        !$_instance && abort(404, 'Resource not found');

        return $_instance;
    }
}

?>