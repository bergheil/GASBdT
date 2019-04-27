<?php

use Illuminate\Database\Seeder;

class SeedUtenti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp = DB::table('users')->insert(
            array(
                'nominativo' => 'Di Perna Francesco',
                'email' => 'francesco.diperna@gmail.com',
                'password' => 'bergheil',
                'ruolo' => 'admin',
                'localita' => 'Bellante',
                'telefono' => '3884736099'
            )
        );
        
        DB::table('users')->insert(
            array(
                'nominativo' => 'Piotti Alessandra',
                'email' => 'alessandrapiotti76@gmail.com',
                'password' => 'piotti',
                'ruolo' => 'coordinatore',
                'localita' => 'Bellante'
            )
        );

        DB::table('users')->insert(
            array(
                'nominativo' => 'Cipriani Paola',
                'email' => 'Cipaola59@virgilio.it',
                'password' => 'cipriani',
                'ruolo' => 'coordinatore',
                'localita' => 'Bellante'
            )
        );

        DB::table('users')->insert(
            array(
                'nominativo' => 'Di Pietro Amelia',
                'email' => 'ameliadipietro@libero.it ',
                'password' => 'dipietro',
                'ruolo' => 'coordinatore',
                'localita' => 'Castellalto'
            )
        );

        DB::table('users')->insert(
            array(
                'nominativo' => 'Bassetto Matelda',
                'email' => 'matelda73@gmail.com ',
                'password' => 'bassetto',
                'ruolo' => 'coordinatore',
                'localita' => 'Bellante'
            )
        );

        DB::table('users')->insert(
            array(
                'nominativo' => 'Bazzani Maria',
                'email' => 'maria.bazzani@gmail.com',
                'password' => 'bazzani',
                'ruolo' => 'socio',
                'localita' => 'Bellante'
            )
        );

        DB::table('users')->insert(
            array(
                'nominativo' => 'Villonio Pietro',
                'email' => 'villoniopietro@gmail.com',
                'password' => 'villonio',
                'ruolo' => 'referente',
                'localita' => 'Bellante'
            )
        );

        DB::table('users')->insert(
            array(
                'nominativo' => 'Riggio Michele',
                'email' => 'info@riggioarance.it',
                'password' => 'riggio',
                'ruolo' => 'fornitore',
                'localita' => 'Catania'
            )
        );
    }
}
