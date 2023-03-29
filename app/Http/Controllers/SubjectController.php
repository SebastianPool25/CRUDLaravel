<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    $asignatura=Subject::where('ing',auth()->user()->ing->get());
    return view('asignatura',compact('asignatura'));
}
