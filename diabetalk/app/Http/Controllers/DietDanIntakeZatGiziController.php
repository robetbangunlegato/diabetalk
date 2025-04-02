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
        return redirect()->route('listfood.index')->with('success', 'Kategori berhasil ditambahkan!');
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

    public function listFoodCreate(Request $reqest){
        $validate = $request->validate([
            'name' => 'required',
            'calories' => 'required|number',
        ]);


    }
}
