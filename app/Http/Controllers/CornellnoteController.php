<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cornellnote;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator; //funcion de validaciones

class CornellnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Notitas =  DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->join('subjects','topics.subject_id','=','subjects.id')
            ->select('subjects.nombre','cornellnotes.titulo','cornellnotes.id','cornellnotes.Conclusion')
            ->where('cornellnotes.user_id',auth()->user()->id)
            ->get();
        return view('cornellnotes.index', compact('Notitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $temas = DB::table('subjects')
        ->join('topics', 'subjects.id', '=', 'topics.subject_id')
        ->select('topics.id', 'topics.tema')
        ->where('subjects.ing', auth()->user()->ingenieria)
        ->get();
        return view('cornellnotes.create', compact('temas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'keywords' => 'required',
            'apuntes' => 'required',
            'conclusion' => 'required',
            'tema' => 'required'
        ]);
        //validación
        if ($validator->fails()) {
            return redirect('cornellnotes/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        //inserción
        $nota = new Cornellnote();
        $nota->titulo = $request->titulo;
        $nota->keywords = $request->keywords;
        $nota->apuntes = $request->apuntes;
        $nota->conclusion = $request->conclusion;
        $nota->user_id = auth()->user()->id;
        $nota->topic_id = $request->tema;
        $nota->save();

        return redirect()->route('cornellnotes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalle_nota=Cornellnote::find($id);    
        $notas = DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->join('subjects','topics.subject_id','=','subjects.id')
            ->where('cornellnotes.id', $detalle_nota->id)
            ->get();
        return view('cornellnotes.show', compact('detalle_nota', 'notas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detalle_nota=Cornellnote::find($id);
        
        $notas = DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->select('topics.tema','topics.unidad','cornellnotes.titulo','cornellnotes.keywords','cornellnotes.apuntes','cornellnotes.conclusion')
            ->where('cornellnotes.id', $detalle_nota->id)
            ->get();
        //dd($notas);
        return view('cornellnotes.edit', compact('detalle_nota','notas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'palabrasClave' => 'required',
            'conclusion' => 'required',

        ]);
        //validación
        if ($validator->fails()) {
            return redirect("cornellnotes/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }
        //inserción
        $detalle_nota=Cornellnote::find($id);
        $nota = Cornellnote::find($id);
        $nota->titulo = $detalle_nota->titulo;
        $nota->keywords = $request->keywords;
        $nota->apuntes = $detalle_nota->apuntes;
        $nota->conclusion = $request->conclusion;
        $nota->user_id = auth()->user()->id;
        $nota->topic_id = $detalle_nota->topic_id;
        $nota->save();

        return redirect()->route('cornellnotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nota=Cornellnote::find($id);
        $nota->delete();
        return redirect()->route('cornellnotes.index');
    }
}
