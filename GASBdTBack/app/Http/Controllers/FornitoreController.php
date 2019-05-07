<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class FornitoreController extends Controller
{
    /**
     * Dettaglio del fornitore
     */
    public function dettaglio($id) {        
        // Mi estraggo i dati generali del fornitore
        $datiFornitore = User::find($id);

        // I prodotti ad esso associati
        $datiFornitore['prodotti'] = Product::where('fornitore_id', '=', $id)->get();
        return $datiFornitore;
    }

    /**
     * Aggiornamento di un fornitore
     */
    public function update(Request $request, $id)
    {
        $utente = User::findOrFail($id);
        $utente->update($request->all());

        return $utente;
    }

    /**
     * Dettaglio di un prodotto del fornitore
     */
    public function dettaglioProdotto($id, $idProdotto) {
        return Product::find($idProdotto);
    }

    /**
    * Aggiornamento di un prodotto
    */
    public function updateProdotto(Request $request, $idFornitore, $idProdotto)
    {                
        $prodotto = Product::findOrFail($request->id);
        $prodotto->update($request->all());

        return $prodotto;
    }

    /**
    * Aggiunge un prodotto al fornitore
    */
    public function addProdotto(Request $request, $idFornitore)
    {                
        /*$prodotto = new Product();
        $prodotto->nome = $request["nome"];
        $prodotto->descrizione = $request["descrizione"];
        $prodotto->quantita = $request["quantita"];
        $prodotto->quantita = $request["quantita"];
        $prodotto->save();
        */
        $request["prezzo"] = str_replace(",", ".", $request["prezzo"]);
        $request["fornitore_id"] = $idFornitore;
        $prodotto = Product::create($request->all());
        return $prodotto;
    }

}
