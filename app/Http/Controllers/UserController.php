<?php

 namespace App\Http\Controllers;
 use App\Models\User;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class UserController extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
     // Get a paginated list of users
    // public function index()
     
    // { // Paginate posts, 10 users per page
    //     $users=User::paginate(10)();
    //     return response()->json($users);
    // }
    
    public function get_all_user(){
        // return 833;
        $users=User::all();
        return response()->json($users); 
        // return view('users', compact('users'));

    }
    public function store(Request $request)
    {
        $newusers = User::create($request->all());
        return response()->json($newusers, 201);
    }
    public function show($id)
    {
        // $users=User::findOrFail($id);
        // return new PostResource($users);
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return response()->json($users,200);
    }
    public function delete_user($id)
    {
        $newusers = User::find($id);
        $newusers->delete();
        $res=[
          'message' => 'User deleted successfully',
          'status'  =>'204',
          'data'=>$newusers,
        ];
        //User::destory($id);
        return response()->jason($res);
    }
}