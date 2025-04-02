<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food_category;
use App\Models\food;


class DietDanIntakeZatGiziController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dietDanIntakeZatGizi.index');
    }

    public function listFoodCategoryIndex(){
        $food_categories = food_category::all();
        return view('dietDanIntakeZatGizi.listFoodCategoryIndex', compact('food_categories'));
    }

    public function listFoodCategoryCreate(){
        return view('dietDanIntakeZatGizi.listFoodCategoryCreate');
    }

    public function listFoodCategoryStore(Request $request){
        $validate = $request->validate([
            'name' => 'required'
        ]);
        $categories = new food_category();
        $categories->category_name  = $validate['name'];
        $categories->save();
        return redirect()->route('listfoodcategory.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function listFoodCategoryEdit(string $id){
        $category = food_category::find($id);
        return view('dietDanIntakeZatGizi.listFoodCategoryEdit', compact('category'));
    }

    public function listFoodCategoryUpdate(Request $request, string $id){
        $validate = $request->validate([
            'name' => 'required'
        ]);
        $categories = food_category::find($id);
        $categories->category_name  = $validate['name'];
        $categories->update();
        return redirect()->route('listfoodcategory.index')->with('success', 'Kategori berhasil diubah!');
    }
    public function listFoodCategoryDestroy(string $id){
        $categories = food_category::find($id);
        $categories->delete();
        return redirect()->route('listfoodcategory.index')->with('success', 'Kategori berhasil dihapus!');
        
    }



    public function listFoodIndex(){
        $foods = food::all();
        return view('dietDanIntakeZatGizi.listFoodIndex', compact('foods'));
    }

    public function listFoodCreate(){
        $food_categories = food_category::all();
        return view('dietDanIntakeZatGizi.listFoodCreate', compact('food_categories'));
    }

    public function listFoodStore(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'calories_per_gram' => 'required',
            'food_category_id' => 'required'
        ]);
        $food = new food();
        $food->name = $validate['name'];
        $food->calories = $validate['calories_per_gram'];
        $food->food_categories_id = $validate['food_category_id'];
        $food->save();
        return redirect()->route('listfood.index')->with('succses', 'Makanan berhasil ditambahkan');
    }
}
