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
    
    public function index()
    {
        $bugs=Bug::where('user_id',auth()->user()->id)->get();

        $this->authorize('viewany',Bug::class);

        return view('bugs.index', compact('bugs'));
    }

    
    public function create()
    {
        $asignatura= Subject::where('ing',auth()->user()->ing)->get();
        
        $this->authorize('create', Bug::class);

        return view('bugs.create', compact('asignatura'));
    }

    
    public function store(Request $request)
    {

        $this->authorize('create', Bug::class);

        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'codigo' => 'required',
            'solution' => 'required',
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
        $bug->description=$request->description;
        $bug->codigo=$request->codigo;
        $bug->solution=$request->solution;
        $bug->estado=$request->estado;
        $bug->plataforma=$request->plataforma;
        $bug->user_id=auth()->user()->id;
        $bug->subject_id=$request->asignatura;
        $bug->save();
        return redirect()->route('bugs.index');
    }
    
    public function show($id)
    {
        $detalle_bug=Bug::find($id);  

        $this->authorize('view', $detalle_bug);

        return view('bugs.show', compact('detalle_bug'));
    }

    
    public function edit($id)
    {
        $bug=Bug::find($id);

        $this->authorize('update', $bug);

        return view('bugs.edit',compact('bug'));
    }

    
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'solution' => 'required',
            'estado' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect("bugs/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $bug = Bug::find($id);

        $this->authorize('update', $bug);

        $bug->description = $request->description;
        $bug->solution = $request->solution;
        $bug->estado = $request->estado;
        $bug->user_id = auth()->user()->id;
        $bug->save();
        return redirect()->route('bugs.index');
    }

    
    public function destroy($id)
    {
        $bug=Bug::find($id);

        $this->authorize('delete', $bug);

        $bug->delete();
        return redirect()->route('bugs.index');
    }
}
