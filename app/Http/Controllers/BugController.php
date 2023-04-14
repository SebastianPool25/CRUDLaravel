<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Bug;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bugs=Bug::where('user_id',auth()->user()->id)->get();
        return view('bugs.index', compact('bugs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asignatura= Subject::where('ing',auth()->user()->ing)->get();
        return view('bugs.create', compact('asignatura'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
            'codigo' => 'required',
            'solucion' => 'required',
            'plataforma'=>'required',
            'estado' => 'required',
            'asignatura'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect('bugs/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $bug=new Bug();
        $bug->descripcion=$request->descripcion;
        $bug->codigo=$request->codigo;
        $bug->solucion=$request->solucion;
        $bug->estado=$request->estado;
        $bug->plataforma=$request->plataforma;
        $bug->user_id=auth()->user()->id;
        $bug->subject_id=$request->asignatura;
        $bug->save();
        return redirect()->route('bugs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalle_bug=Bug::find($id);  
        return view('bugs.show', compact('detalle_bug'));
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
    public function destroy($id)
    {
        $bug=Bug::find($id);
        $bug->delete();
        return redirect()->route('bugs.index');
    }
}
