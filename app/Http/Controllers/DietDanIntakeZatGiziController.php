<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food_category;
use App\Models\food_consumption;
use App\Models\food;
use Carbon\Carbon;


class DietDanIntakeZatGiziController extends Controller
{
    // Food consumption
    public function index()
    {
        //
        $foods = food::all();

        // Ambil data konsumsi makanan hari ini
        $today = Carbon::today();
        $totalCalories = food_consumption::whereDate('food_consumptions.created_at', $today)
            ->join('foods', 'food_consumptions.foods_id', '=', 'foods.id')
            ->where('user_id', auth()->user()->id)
            ->selectRaw('SUM(food_consumptions.amount * foods.calories) as total_calories')
            ->value('total_calories') ?? 0;

        // Set batas maksimal 1900kkal
        $maxCalories = 1900;
        $remainingCalories = max($maxCalories - $totalCalories, 0);

        return view('dietDanIntakeZatGizi.index', compact('foods','totalCalories', 'remainingCalories', 'maxCalories'));
    }

    public function foodConsumptionStore(Request $request){
        $validate = $request->validate([
            'amount' => 'required',
            'adverb_time' => 'required',
            'food_id' => 'required'
        ]);
        $food_consumptions = new food_consumption();
        $food_consumptions->amount = $validate['amount'];
        $food_consumptions->adverb_time = $validate['adverb_time'];
        $food_consumptions->foods_id = $validate['food_id'];
        $food_consumptions->user_id = auth()->user()->id;
        $food_consumptions->save();
        return redirect()->route('dietdanintakezatgizi.index')->with('success', 'Konsumsi berhasil ditambahkan!');
    }

    public function foodConsumptionHistoryIndex(){
        $food_consumptions_history = food_consumption::
        join('foods', 'food_consumptions.foods_id', '=', 'foods.id')
        ->where('user_id', auth()->id())
        ->selectRaw('foods.name as name')
        ->selectRaw('food_consumptions.created_at as created_at')
        ->selectRaw('food_consumptions.adverb_time as adverb_time')
        ->selectRaw('food_consumptions.amount as amount')

        ->selectRaw('food_consumptions.amount * foods.calories as calories')
        ->selectRaw('food_consumptions.amount * foods.fat as fat')
        ->selectRaw('food_consumptions.amount * foods.protein as protein')
        ->selectRaw('food_consumptions.amount * foods.carbo as carbo')
        ->selectRaw('food_consumptions.amount * foods.fiber as fiber')
        ->orderBy('food_consumptions.created_at', 'desc')
        ->get();
        // dd($food_consumptions_history);
        // dd($food_consumptions_history);
        return view('dietDanIntakeZatGizi.foodConsumptionHistoryIndex', compact('food_consumptions_history'));
    }






    // Food category
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

    // Food list
    public function listFoodIndex(Request $request) {
        
        $foods = Food::orderBy('created_at', 'desc')->get();
        return view('dietDanIntakeZatGizi.listFoodIndex', compact('foods'));
    }

    public function listFoodCreate(){
        $food_categories = food_category::all();
        return view('dietDanIntakeZatGizi.listFoodCreate', compact('food_categories'));
    }

    public function listFoodStore(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'food_category_id' => 'required',
            'calories_per_gram' => 'required',
            'fat_per_gram' => 'required',
            'protein_per_gram' => 'required',
            'carbo_per_gram' => 'required',
            'fiber_per_gram' => 'required'
        ]);
        $food = new food();
        $food->name = $validate['name'];
        $food->calories = $validate['calories_per_gram'];
        $food->fat = $validate['fat_per_gram'];
        $food->protein = $validate['protein_per_gram'];
        $food->carbo = $validate['carbo_per_gram'];
        $food->fiber = $validate['fiber_per_gram'];
        
        $food->food_categories_id = $validate['food_category_id'];
        $food->save();
        return redirect()->route('listfood.index')->with('success', 'Makanan berhasil ditambahkan');
    }

    public function listFoodEdit(string $id){
        $food = food::find($id);
        $food_categories = food_category::all();
        return view('dietDanIntakeZatGizi.listFoodEdit', compact('food_categories','food'));
    }

     public function listFoodUpdate(Request $request, string $id){
        $validate = $request->validate([
            'name' => 'required',
            'calories_per_gram' => 'required',
            'food_category_id' => 'required',
            'fat_per_gram' => 'required',
            'protein_per_gram' => 'required',
            'carbo_per_gram' => 'required',
            'fiber_per_gram' => 'required'
        ]);
        $food = food::find($id);
        $food->name = $validate['name'];
        $food->calories = $validate['calories_per_gram'];
        $food->fat = $validate['fat_per_gram'];
        $food->protein = $validate['protein_per_gram'];
        $food->carbo = $validate['carbo_per_gram'];
        $food->fiber = $validate['fiber_per_gram'];
        $food->food_categories_id = $validate['food_category_id'];
        $food->save();
        return redirect()->route('listfood.index')->with('succses', 'Makanan berhasil diubah!');
    }


    public function listFoodDestroy(string $id){
        $food= food::find($id);
        $food->delete();
        return redirect()->route('listfood.index')->with('success', 'Makanan berhasil dihapus!');

    }

    
}
