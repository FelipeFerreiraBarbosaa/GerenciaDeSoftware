<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa = Pessoa::orderBy('id')->get();
        return view('pessoa.index', compact('pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pessoa::create($request->all());

        return redirect('pessoa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::where('id', $id)->first();
        return view('pessoa.edit', ['id' =>  $pessoa->id, 'nome' => $pessoa->nome, 'sobrenome' => $pessoa->sobrenome, 'email' => $pessoa->email, 'dataNascimento' => $pessoa->dataNascimento, 'Sexo' => $pessoa->Sexo, 'Idade' => $pessoa->Idade]);
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
        $data = $request->all();

        $pessoa = Pessoa::find($id);

        $pessoa->nome = $data['nome'];
        $pessoa->sobrenome = $data['sobrenome'];
        $pessoa->email = $data['email'];
        $pessoa->dataNascimento = $data['dataNascimento'];
        $pessoa->Sexo = $data['Sexo'];
        $pessoa->Idade = $data['Idade'];

        $pessoa->save();

        return redirect('pessoa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pessoa::destroy($id);

        return redirect('pessoa');
    }
}