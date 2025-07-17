<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\health_record;
use App\Models\blood_sugar;
use App\Models\blood_pressure;
use App\Models\cholesterol;
use App\Models\kidney_function;


use Illuminate\Support\Facades\DB;

class CatatanKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // get user id
        $user_id = auth()->user()->id;

        // water consumption chart
        // get water consumption/intake per day
        $totalWaterIntakePerDay = DB::table('health_records')
            ->where('user_id', $user_id)
            ->where('record_type', 'water_intake')
            ->whereDate('created_at', Carbon::today()) // Filter berdasarkan tanggal hari ini
            ->sum('value'); // -> output is float

        // convertion float to integer data type
        $totalWaterIntakePerDay = intval($totalWaterIntakePerDay);
        
        //activity chart
        $activityChartData = DB::table('activities')
            ->join('users', 'activities.user_id', '=', 'users.id')
            ->join('data_personals', 'users.id', '=', 'data_personals.user_id')
            ->where('activities.user_id', $user_id)
            ->selectRaw("
                SUM(activities.MET * data_personals.weight * activities.duration) as caloriesBurned,
                SUM( (activities.speed * (activities.duration * 60 )) / 0.75) as totalStepPerDay")
            ->whereDate('activities.created_at', Carbon::today())
            ->first();

        // blood sugar chart
        // Ambil 3 hari terakhir
        $dates = collect([
            Carbon::today()->subDays(2)->toDateString(),
            Carbon::yesterday()->toDateString(),
            Carbon::today()->toDateString(),
        ]);

        // Ambil data terbaru per tanggal menggunakan subquery
        $gulaDarahData = DB::table('blood_sugars as gd1')
            ->select('gd1.blood_sugar', DB::raw('DATE(gd1.created_at) as date'))
            ->where('user_id', $user_id)
            ->whereIn(DB::raw('DATE(gd1.created_at)'), $dates)
            ->whereRaw('gd1.created_at = (SELECT MAX(gd2.created_at) FROM blood_sugars as gd2 WHERE DATE(gd2.created_at) = DATE(gd1.created_at))')
            ->get()
            ->keyBy('date');

        // Pastikan setiap tanggal memiliki nilai, jika tidak ada set null
        $sugarLevels = $dates->map(function ($date) use ($gulaDarahData) {
            return $gulaDarahData[$date]->blood_sugar ?? null;
        });

        // HbA1c level chart
        // Ambil rata-rata kadar gula darah per tanggal
        $HbAc1 = DB::table('blood_sugars')
            ->selectRaw('DATE(created_at) as date, (AVG(blood_sugar) + 46.7) / 28.7 as averageBloodSugarPerDay')
            ->where('user_id', $user_id)
            ->whereIn(DB::raw('DATE(created_at)'), $dates)
            ->groupBy('date')
            ->get()
            ->keyBy('date');

        // Pastikan setiap tanggal memiliki nilai, jika tidak ada set null
        $HbA1cChartData = $dates->mapWithKeys(function ($date) use ($HbAc1) {
            return [$date => $HbAc1[$date]->averageBloodSugarPerDay ?? null];
        });

        // blood pressure
        $bloodPressuresData = DB::table('blood_pressures')
        ->where('user_id', $user_id)
        ->latest('created_at')
        ->first();

        // cholesterol
        $cholesterolsData = DB::table('cholesterols')
        ->where('user_id', $user_id)
        ->latest('created_at')
        ->first();

        // kidney function
        $kidneyFunctionData = DB::table('kidney_functions')
        ->where('user_id', $user_id)
        ->latest('created_at')
        ->first();

        return view('catatanKesehatan.index', 
        compact([
        'dates', 
        'sugarLevels',
        'totalWaterIntakePerDay', 
        'activityChartData', 
        'HbA1cChartData', 
        'bloodPressuresData',
        'cholesterolsData',
        'kidneyFunctionData'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'value' => 'required',
            'record_type' => 'required',
            'met_level' => 'nullable'
        ]);
        $health_record = new health_record();
        $health_record->value = $validate['value'];
        $health_record->record_type = $validate['record_type'];
        $health_record->user_id = Auth()->user()->id;
        $health_record->save();

        
        if($request->next_page == 'intro_page_2'){
            return view('introPage.intro_page_2');
        }elseif($request->next_page == 'intro_page_3'){
            return view('introPage.intro_page_3');
        }
        // $dates = ['2025-01-01', '2025-01-02', '2025-01-03'];
        // $sugarLevels = [110, 120, 105];
        return redirect()->route('catatankesehatan.index')->with('');
    }

    public function bloodSugarStore(Request $request){
        $validate = $request->validate([
            'blood_sugar' => 'required'
        ]);

        $blood_sugars = new blood_sugar();
        $blood_sugars->blood_sugar = $validate['blood_sugar'];
        $blood_sugars->user_id = auth()->user()->id;
        $blood_sugars->save();

        return redirect()->route('catatankesehatan.index');
    }
    
    public function bloodPressureStore(Request $request){
        $validate = $request->validate([
            'sistolik' => 'required',
            'diastolik' => 'required'
        ]);
        $blood_pressures = new blood_pressure();
        $blood_pressures->sistolik = $validate['sistolik'];
        $blood_pressures->diastolik = $validate['diastolik'];
        $blood_pressures->user_id = auth()->user()->id;
        $blood_pressures->save();
        return redirect()->route('catatankesehatan.index');
    }

    public function cholesterolStore(Request $request){
        $validate = $request->validate([
            'cholesterol' => 'required'
        ]);
        $cholesterols = new cholesterol();
        $cholesterols->cholesterol = $validate['cholesterol'];
        $cholesterols->user_id = auth()->user()->id;
        $cholesterols->save();

        return redirect()->route('catatankesehatan.index');
    }

    public function kidneyFunctionStore(Request $request){
        $validate = $request->validate([
            'kidney_function' => 'required'
        ]);

        // dd($validate);  

        $kidney_functions = new kidney_function();
        $kidney_functions->kidney_function = $validate['kidney_function'];
        $kidney_functions->user_id = auth()->user()->id;
        $kidney_functions->save();

        return redirect()->route('catatankesehatan.index');


    }
}
