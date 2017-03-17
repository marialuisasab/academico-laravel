<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Turma;
use App\Disciplina;
class TurmaController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth',['except'=> 'index']);//so o index n precisa de login para ser acessado
  }
     public function index()
     {
       $turmas = Turma::all();
       return view('turmas.index')->with('turmas', $turmas);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $disciplinas = Disciplina::all();
           return view('turmas.create')->with('disciplinas', $disciplinas);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         Turma::create($request->all());
         return redirect('/turmas');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
       $turma = Turma::find($id);
       return view('turmas.show')->with('turma', $turma);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {

         $turma = Turma::find($id);
         return view('turmas.edit')->with('turma', $turma);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       $turma = Turma::find($id);
       $turma->nome=$request->nome;
       $turma->disciplina_id=$request->disciplina_id;


       $turma->save();

       return redirect('/turmas');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
        Turma::destroy($id);
         return redirect('/turmas')->with('message','Aluno excluído!');
     }
}
