<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use Illuminate\Http\Request;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bugs.index');
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
    public function show(Bug $bug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bug $bug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bug $bug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bug $bug)
    {
        //
    }
}
