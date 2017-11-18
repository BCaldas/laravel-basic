<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
use Session;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index',array('clientes' => $clientes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente();
        $cliente -> nome = $request -> input('nome');
        $cliente -> sobrenome = $request -> input('sobrenome');
        $cliente -> email = $request -> input('email');
        $cliente -> telefone = $request -> input('telefone');
        $cliente -> endereco = $request -> input('endereco');
        if ($cliente->save()){
            return redirect('clientes');
        }
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show', array('cliente' => $cliente));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit')->withCliente($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->sobrenome = $request->input('sobrenome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->endereco = $request->input('endereco');

        if ($cliente->save()){
            return redirect("clientes/$cliente->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if ($cliente->delete()){
            Session::flash('mensagem', 'Cliente excluído com sucesso.');
            return redirect('clientes');
        }
    }
}
