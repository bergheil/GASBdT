<?php

use Illuminate\Database\Seeder;

class SeedOrdiniProdotti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mi creo prima dei prodotti
        $tmp = DB::table('products')->insert(
            array(
                'nome' => 'Arance rosse',
                'descrizione' => 'Arance rosse tarocco Cassetta da 13 KG',
                'quantita' => 13,
                'unita_di_misura' => 'kg',
                'prezzo' => 18,
                'fornitore_id' => 8
            )
        );
        $tmp = DB::table('products')->insert(
            array(
                'nome' => 'Pistacchi naturali',
                'descrizione' => 'Pistacchi al naturale non tostati, non salati',
                'quantita' => 1,
                'unita_di_misura' => 'kg',
                'prezzo' => 15,
                'fornitore_id' => 8
            )
        );

        // Mi creo un ordine di esempio
        $tmp = DB::table('orders')->insert(
            array(
                'nome' => 'Primo ordine 2019',
                'descrizione' => 'Ordine di test',
                'stato' => 'aperto',
                'fornitore_id' => 8,
                'referente_id' => 1
            )
        );        
    }
}
