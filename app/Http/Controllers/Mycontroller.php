<?php

namespace App\Http\Controllers\Mycontroller;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Mycontroller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function get_all_user(){
        $users=User::all();
        return response()->json($users); 

    }

    
}