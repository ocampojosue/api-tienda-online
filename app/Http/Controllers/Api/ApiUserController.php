<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiUserController extends Controller
{
    public function index(){
        //$users = User::get(['name', 'email', 'email_verified_at', 'created_at', 'updated_at']);//Traer solo los campos indicados
        $users = User::orderBy('created_at','desc')->get();
        return response()->json($users, 200);
    }

    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        $users = User::create($request->all());
        return response()->json($users, 200);
    }

    public function show($id){
        $user = User::findOrFail($id);
        return response()->json($user, 200);
    }

    public function update(Request $request, $id){
        User::findOrFail($id)->update($request->all());
        return response()->json("EL registro de ID $id fue actualizado", 200);
    }

    public function destroy($id){
        User::destroy($id);
        // return "'EL registro de ID $id fue eliminado'";
        return response()->json("EL registro de ID $id fue eliminado", 200);
    }
}
