<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function viewCreateClient()
    {
        return View('createClient');
    }
}
