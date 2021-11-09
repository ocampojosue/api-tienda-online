<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiCategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','desc')->get();
        return response()->json($categories, 200);
    }

    public function store(Request $request){
        try {
            $rules = [
                'name' => 'required|unique:categories',
                'description' => 'required'
            ];
            $messages = [
                'required' => 'El campo :attribute es requerido',
                'name.unique' => 'La categoria ya Existe'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            if ($validator->fails()) {
                return jsend_fail($validator->errors());
            }
            return jsend_success(Category::create($request->all()), 201);
        } catch (\Exception $e) {
            return jsend_error($e);
        }

        // $categories = Category::create($request->all());
        // return response()->json($categories, 200);
    }

    public function show($id){
        $category = Category::findOrFail($id);
        return response()->json($category, 200);
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id)->update($request->all());
        return response()->json("EL registro de ID $id fue actualizado", 200);
    }

    public function destroy($id){
        Category::destroy($id);
        // return "'EL registro de ID $id fue eliminado'";
        return response()->json("EL registro de ID $id fue eliminado", 200);
    }
}
