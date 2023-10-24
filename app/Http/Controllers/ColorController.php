<?php

namespace App\Http\Controllers;

use App\Models\color;
use Illuminate\Http\Request;
use App\Http\Requests\colorRequest;

class ColorController extends Controller
{
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
        return view('pages.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(colorRequest $request)
    {
        try {
            $color = new Color();
            $color->name = $request->name;
            $color->hex_code = $request->hex_code;
            // $color->rgb_code = $request->rgb_code;
            $color->save();

            return redirect()->route('color.index')->with('success', 'Color added successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, color $color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(color $color)
    {
        //
    }
}
