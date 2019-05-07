<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    // Ritorna tutti gli utenti del sistema
    public function index()
    {
        return User::all();
    }

    /**
     * Ritorna l'elenco dei fornitori
     */
    public function elencoFornitori()
    {        
        return User::where('ruolo', '=', 'fornitore')
            ->get();
    }

    /**
     * Ritorna l'elenco dei soci
     */
    public function elencoSoci()
    {                
        return User::where('ruolo', '!=', 'fornitore')
            ->get();
    }

    /**
     * Dettaglio di un utente
     */
    public function show($id)
    {
        return User::find($id);
    }

    
    /**
     * Creazione di un utente
     */
    public function store(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * Aggiornamento di un utente
     */
    public function update(Request $request, $id)
    {
        $utente = User::findOrFail($id);
        $utente->update($request->all());

        return $utente;
    }

    /**
     * Cancellazione di un utente
     */
    public function delete(Request $request, $id)
    {
        $utente = User::findOrFail($id);
        $utente->delete();

        return 204;
    }
}
