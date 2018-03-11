<?php

use Illuminate\Database\Seeder;

class ProdutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtores')->insert([
            'nome' => 'João do Nascimento Fagundes',
            'cpf' => '78953290836',
            'nascimento' => '1972-05-16',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('produtores')->insert([
            'nome' => 'Maria Evangelista dos Santos',
            'cpf' => '76548715422',
            'nascimento' => '1976-12-21',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
