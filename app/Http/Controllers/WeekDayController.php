<?php

namespace App\Http\Controllers;

use App\Models\Weekday;
use Illuminate\Http\Request;

class WeekDayController extends Controller
{
    public function pageWeekday(){
        return view('pages.weekdays');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weekdays.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'пн' => 'required|boolean',
            'вт' => 'required|boolean',
            'ср' => 'required|boolean',
            'чт' => 'required|boolean',
            'пт' => 'required|boolean',
            'сб' => 'required|boolean',
            'вс' => 'required|boolean',
        ]);

        Weekday::create($data);

        return redirect()->route('weekdays.create')->with('success', 'Данные успешно сохранены.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Weekday $weekday)
    {
        return '';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weekday $weekday)
    {
        return '';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weekday $weekday)
    {
        return '';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weekday $weekday)
    {
        return '';
    }
}
