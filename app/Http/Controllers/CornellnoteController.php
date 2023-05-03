<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cornellnote;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator; 

class CornellnoteController extends Controller
{
    
    public function index()
    {
        $Notitas =  DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->join('subjects','topics.subject_id','=','subjects.id')
            ->select('subjects.nombre','cornellnotes.titulo','cornellnotes.id','cornellnotes.keywords')
            ->where('cornellnotes.user_id',auth()->user()->id)
            ->get();

            $this->authorize('viewany',Cornellnote::class);

        return view('cornellnotes.index', compact('Notitas'));
    }

    public function create()
    {
        $temas = DB::table('subjects')
        ->join('topics', 'subjects.id', '=', 'topics.subject_id')
        ->select('topics.id', 'topics.tema')
        ->where('subjects.ing', auth()->user()->ing)
        ->get();
        
        $this->authorize('create', Cornellnote::class);

        return view('cornellnotes.create', compact('temas'));
    }

    
    public function store(Request $request)
    {

        $this->authorize('create', Cornellnote::class);

        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'keywords' => 'required',
            'apuntes' => 'required',
            'conclusion' => 'required',
            
        ]);
        if ($validator->fails()) {
            return redirect('cornellnotes/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $nota = new Cornellnote();
        $nota->titulo = $request->titulo;
        $nota->keywords = $request->keywords;
        $nota->apuntes = $request->apuntes;
        $nota->conclusion = $request->conclusion;
        $nota->user_id = auth()->user()->id;
        $nota->topic_id = $request->tema_id;
        $nota->save();

        return redirect()->route('cornellnotes.index');
    }

    public function show($id)
    {
        $detalle_nota=Cornellnote::find($id);    

        $this->authorize('view', $detalle_nota);

        $notas = DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->join('subjects','topics.subject_id','=','subjects.id')
            ->where('cornellnotes.id', $detalle_nota->id)
            ->get();
        return view('cornellnotes.show', compact('detalle_nota', 'notas'));
    }

    public function edit($id)
    {
        $detalle_nota=Cornellnote::find($id);

        $this->authorize('update', $detalle_nota);
        
        $notas = DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->select('topics.tema','topics.unidad','cornellnotes.titulo','cornellnotes.keywords','cornellnotes.apuntes','cornellnotes.conclusion')
            ->where('cornellnotes.id', $detalle_nota->id)
            ->get();
        return view('cornellnotes.edit', compact('detalle_nota','notas'));
    }

    
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'keywords' => 'required',
            'conclusion' => 'required',

        ]);
        
        if ($validator->fails()) {
            return redirect("cornellnotes/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }
        $detalle_nota=Cornellnote::find($id);
        
        $this->authorize('update', $detalle_nota);

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

    public function destroy($id)
    {
        $nota=Cornellnote::find($id);
        $this->authorize('delete', $nota);
        $nota->delete();
        return redirect()->route('cornellnotes.index');
    }
}
