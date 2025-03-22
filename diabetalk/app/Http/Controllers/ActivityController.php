<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            'step' => 'required',
            'duration' => 'required',
            'met_level' => 'required'
        ]);
        
        $activity = new Activity();
        $activity->step = $validation['step'];
        $activity->duration = $validation['duration'];
        $activity->MET = $validation['met_level'];
        $activity->user_id = Auth()->user()->id;
        $activity->save();

        return redirect()->route('catatankesehatan.index');
    }
}
