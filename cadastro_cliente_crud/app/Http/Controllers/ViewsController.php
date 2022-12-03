<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function viewHome()
    {
        return View('home');
    }

    public function viewCreate()
    {
        return View('createClient');
    }

    public function readClient()
    {
        return View('readClient');
    }

    public function editClient($id)
    {
        //FindOrFail encontra a requisição que veio pelo metodo post
        $clientEdit = Cliente::findOrFail($id);

        return View('editClient', ['clientEdit'=>$clientEdit]);
    }
}
