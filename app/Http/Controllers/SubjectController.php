<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignaturas=Subject::where('ing',auth()->user()->ing)->get();
        return view('asignaturas', compact('asignaturas'));
    }

}