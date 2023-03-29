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
        $DatosAsignaturas = Subject::all();
        //dd($DatosAsignaturas);
        return view('asignaturas', compact('DatosAsignaturas'));
    }

}