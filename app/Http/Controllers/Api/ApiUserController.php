<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    public function index(){
        //$users = User::get(['name', 'email', 'email_verified_at', 'created_at', 'updated_at']);//Traer solo los campos indicados
        $users = User::orderBy('id','desc')->get();
        return response()->json($users, 200);
    }

    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        // $users = User::create($request->all());
        // return response()->json($users, 200);
        try {
            $rules = [
                'name' => 'required|unique:users',
                'email' => 'required|unique:users'
            ];
            $messages = [
                'required' => 'El campo :attribute es requerido',
                'unique' => 'El campo :attribute ya Existe'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            if ($validator->fails()) {
                return jsend_fail($validator->errors());
            }
            return jsend_success(User::create($request->all()), 201);
        } catch (\Exception $e) {
            return jsend_error($e);
        }
    }

    public function show($id){
        $user = User::findOrFail($id);
        return response()->json($user, 200);
    }

    public function update(Request $request, $id){
        // User::findOrFail($id)->update($request->all());
        // return response()->json("EL registro de ID $id fue actualizado", 200);
        try {
            $rules = [
                'name' => "required|unique:users,name,$id",
                'email' => "required|unique:users,email,$id"
            ];
            $messages = [
                'required' => 'El campo :attribute es requerido',
                'unique' => 'El campo :attribute ya Existe'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            if ($validator->fails()) {
                return jsend_fail($validator->errors());
            }
            return jsend_success(User::findOrFail($id)->update($request->all()), 200);
        } catch (\Exception $e) {
            return jsend_error($e);
        }
    }

    public function destroy($id){
        User::destroy($id);
        // return "'EL registro de ID $id fue eliminado'";
        return response()->json("EL registro de ID $id fue eliminado", 200);
    }
}
