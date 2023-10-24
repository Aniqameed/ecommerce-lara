<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;
use App\Http\Requests\sizeRequest;

class SizeController extends Controller
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
    public function create(sizeRequest $request)
    {
        return view('pages.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(sizeRequest $request)
    {
        $selectedSize = $request->input('size');

        // Handle the selected size and other form data here

       // Redirect or return a response
        try {
            $size = new size();
            // $size->size = $request->size;
            $request->validate([
                'size' => 'required|string|in:small,medium,large',
            ]);

            return redirect()->route('size.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, size $size)
    {
        $request->validate([
            'size' => 'required|string|in:small,medium,large',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(size $size)
    {
        //
    }
}
