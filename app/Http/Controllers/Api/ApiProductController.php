<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->get();
        return response()->json($products, 200);
    }

    public function store(Request $request){
        try {
            $rules = [
                'name' => 'required|unique:products',
                'cost' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'category_id' => 'required'
            ];
            $messages = [
                'required' => 'El campo :attribute es requerido',
                'name.unique' => 'El producto ya Existe'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            if ($validator->fails()) {
                return jsend_fail($validator->errors());
            }
            return jsend_success(Product::create($request->all()), 201);
        } catch (\Exception $e) {
            return jsend_error($e);
        }
    }

    public function show($id){
        $products = Product::findOrFail($id);
        return response()->json($products, 200);
    }

    public function update(Request $request, $id){
        try {
            $rules = [
                'name' => "required|unique:products,name,$id",
                'cost' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'category_id' => 'required'
            ];
            $messages = [
                'required' => 'El campo :attribute es requerido',
                'name.unique' => 'El producto ya Existe'
            ];
            $validator = Validator::make($request->all(),$rules, $messages);

            if ($validator->fails()) {
                return jsend_fail($validator->errors());
            }
            return jsend_success(Product::findOrFail($id)->update($request->all()));
        } catch (\Exception $e) {
            return jsend_error($e);
        }
    }

    public function destroy($id){
        Product::destroy($id);
        // return "'EL registro de ID $id fue eliminado'";
        return response()->json("EL registro de ID $id fue eliminado", 200);
    }
}
