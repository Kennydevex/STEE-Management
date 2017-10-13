<?php

namespace STEE\Http\Controllers\Backend\NewsControllers;
use Category;
use Illuminate\Http\Request;
use STEE\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json(['categories'=>$categories], 200);
    }

    public function store(Request $request)
    {
        //Funcionando porem é preciso fazer algumas validações
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return response()->json(['category'=>$category], 201);
    }

    public function edit(Request $request, $id)
    {
        //Esta aqui vamos ter de ver
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message'=>'Categoria não foi encontado'], 404);
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return response()->json(['category'=>$category], 201);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        if (!$category) {
            return response()->json(['message'=>'Categoria não foi eleiminado'], 200);
        }
        return response()->json(['message'=>'Categoria eliminado com sucesso'], 200);
    }
}
