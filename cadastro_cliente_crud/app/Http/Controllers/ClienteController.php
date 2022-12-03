<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function createClient(Request $request)
    {
        $clientData = $request->validate([
            'name' => 'required|string',
            'cnpj' => 'required|string|max:14',
            'phone' => 'string|max:13',
            'email' => 'email:rfc,dns',
            'address' => 'required|string|max:100'
        ]);

        Cliente::create($clientData);

        return redirect()->route('viewCreateClient')->with('msg',"Cliente $request->name criado com sucesso");

    }

    public function readClient()
    {
        $clients = Cliente::all();

        return view('readClient', compact('clients'));
    }

    public function updateClient(Request $request)
    {
        //FindOrFail encontra a requisição que veio pelo metodo put
        //update atualiza todos os dados 
        Cliente::findOrFail($request->id)->update($request->all());

        return redirect()->route('readClient')->with('msg', "Usuário $request->name editado com sucesso!");
    }

    public function destroy($id)
    {
        //Localizar o nome do usuario para passar na msg
        $deletedUserMsg = Cliente::findOrFail($id);
        
        //Deletar o uusuario no banco de dados
        Cliente::findOrFail($id)->delete();

        return redirect()->route('readClient')->with('msg', "Usuário $deletedUserMsg->name deletado com sucesso ");

    }
}
