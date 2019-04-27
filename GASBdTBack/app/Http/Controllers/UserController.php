<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function elencoFornitori()
    {        
        return User::where('ruolo', '=', 'fornitore')
            ->get();
    }

    public function elencoSoci()
    {        
        return User::where('ruolo', '!=', 'fornitore')
            ->get();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $utente = User::findOrFail($id);
        $utente->update($request->all());

        return $utente;
    }

    public function delete(Request $request, $id)
    {
        $utente = User::findOrFail($id);
        $utente->delete();

        return 204;
    }
}
