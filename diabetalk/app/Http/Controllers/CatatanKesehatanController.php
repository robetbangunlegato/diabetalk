<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\health_record;
use Illuminate\Support\Facades\DB;

class CatatanKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // water consumption/intake per day
        $totalWaterIntake = DB::table('health_records')
            ->where('record_type', 'water_intake')
            ->whereDate('created_at', Carbon::today()) // Filter berdasarkan tanggal hari ini
            ->sum('value');
        
        dd($totalWaterIntake);

        $dates = ['2025-01-01', '2025-01-02', '2025-01-03'];
        $sugarLevels = [110, 120, 105];
        return view('catatanKesehatan.index', compact('dates', 'sugarLevels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'value' => 'required',
            'record_type' => 'required'
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
        $dates = ['2025-01-01', '2025-01-02', '2025-01-03'];
        $sugarLevels = [110, 120, 105];
        return view('catatanKesehatan.index', compact('dates', 'sugarLevels'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
