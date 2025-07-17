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
            'duration' => 'required',
            'met_level' => 'required'
        ]);

        // dd($validation);

       $speed = 0; 
        if($validation['met_level'] == 3.5){
            $speed = 0.83;
        }elseif($validation['met_level'] == 4){
            $speed = 1.25;
        }elseif($validation['met_level'] == 5){
            $speed = 1.67;
        }

        $activity = new Activity();
        $activity->duration = $validation['duration'];
        $activity->speed = $speed;
        $activity->MET = $validation['met_level'];
        $activity->user_id = Auth()->user()->id;
        $activity->save();

        return redirect()->route('catatankesehatan.index');
    }
}
