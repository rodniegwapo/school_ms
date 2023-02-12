<?php

namespace App\Http\Controllers;

use App\Models\YearLevel;
use Illuminate\Http\Request;

class YearLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return YearLevel::query()->with('student.user')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'sections' => 'array'
        ]);

        $level = new YearLevel($data);
        $level->save();

        $level->sections()->attach($request->sections);

        return response()->json([
            'message' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\YearLevel  $yearLevel
     * @return \Illuminate\Http\Response
     */
    public function show(YearLevel $yearLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YearLevel  $yearLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(YearLevel $yearLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\YearLevel  $yearLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YearLevel $yearLevel)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'sections' => 'array'
        ]);

        $yearLevel->fill($data);
        $yearLevel->save();

        $yearLevel->sections()->sync($request->sections);

        return response()->json([
            'message' => 'updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YearLevel  $yearLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(YearLevel $yearLevel)
    {
        $yearLevel->delete();

        return response()->json(['message' => 'deleted']);
    }
}
