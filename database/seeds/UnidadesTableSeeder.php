<?php

use Illuminate\Database\Seeder;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades')->insert([
            'codigo' => 'und',
            'descricao' => 'unidade',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('unidades')->insert([
            'codigo' => 'kg',
            'descricao' => 'quilo',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('unidades')->insert([
            'codigo' => 'duz',
            'descricao' => 'dúzia',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
