<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        $products = Product::create($request->all());
        return response()->json($products, 200);
    }

    public function show($id){
        $products = Product::findOrFail($id);
        return response()->json($products, 200);
    }

    public function update(Request $request, $id){
        Product::findOrFail($id)->update($request->all());
        return response()->json("EL registro de ID $id fue actualizado", 200);
    }

    public function destroy($id){
        Product::destroy($id);
        // return "'EL registro de ID $id fue eliminado'";
        return response()->json("EL registro de ID $id fue eliminado", 200);
    }
}
