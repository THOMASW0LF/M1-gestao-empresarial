<?php

namespace App\Http\Controllers;

use App\Models\SiteCliente;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $pageTitle = 'Clientes';

        $clientes = SiteCliente::latest()->get();

        return view('pages.admin.clientes.index', compact('pageTitle', 'clientes'));
    }
}
