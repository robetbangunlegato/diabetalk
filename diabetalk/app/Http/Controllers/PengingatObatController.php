<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use App\Models\ReminderSchedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
class PengingatObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reminders = Reminder::all();
        return view('pengingatObat.index', compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pengingatObat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // dd($request->all());

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'instruction' => 'required|in:sebelum makan,sesudah makan,tidak ada',
        'notification' => 'required|in:gmail,push_notification,whatsapp',
        'time' => 'required|date_format:H:i',
        'day' => 'required',
        'day.*' => 'in:just_once,everyday,sunday,monday,tuesday,wednesday,thursday,friday,saturday',
        ]);

        // dd($request);

        // Simpan data ke tabel reminders
        $reminder = Reminder::create([
            'title' => $request->title,
            'description' => $request->description,
            'instruction' => $request->instruction,
            'reminder_method' => $request->notification,
            'reminder_time' => $request->time,
            'user_id' => Auth::id(),
        ]);


        // mengkonversi input 'day' menjadi array
        $days = Arr::wrap($request->day);

        // Simpan data ke tabel reminder_schedules
        foreach ($days as $day) {
            ReminderSchedule::create([
                'reminder_id' => $reminder->id,
                'day' => $day,
            ]);
        }

        return redirect()->route('pengingatobat.index')->with('success', 'Pengingat obat berhasil ditambahkan.');
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
