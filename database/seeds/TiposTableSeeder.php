<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            'descricao' => 'produto',
            'tabela' => 'produtos',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tipos')->insert([
            'descricao' => 'produtor',
            'tabela' => 'produtores',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tipos')->insert([
            'descricao' => 'propriedade',
            'tabela' => 'propriedades',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tipos')->insert([
            'descricao' => 'feira',
            'tabela' => 'feiras',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tipos')->insert([
            'descricao' => 'oferta',
            'tabela' => 'ofertas',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tipos')->insert([
            'descricao' => 'unidade',
            'tabela' => 'unidades',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
