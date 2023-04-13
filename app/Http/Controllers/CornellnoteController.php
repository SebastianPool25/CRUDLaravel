<?php

namespace App\Http\Controllers;

use App\Models\Cornellnote;
use Illuminate\Http\Request;

class CornellnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cornellnotes.index');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Cornellnote $cornellnote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cornellnote $cornellnote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cornellnote $cornellnote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cornellnote $cornellnote)
    {
        //
    }
}
