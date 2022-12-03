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
}
