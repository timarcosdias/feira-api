<?php

use Illuminate\Database\Seeder;

class PropriedadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propriedades')->insert([
            'produtor_id' => 1,
            'nome' => 'Fazenda Canaã',
            'descricao' => 'A Fazenda Canaã foi fundada em meados de 2001 no município de Porto Alegre-TO e é líder na produção de abacaxi na região do sudeste tocantinense.',
            'lat' => 5.5475586,
            'lng' => -47.3559811,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('propriedades')->insert([
            'produtor_id' => 2,
            'nome' => 'Chácara Horizonte',
            'descricao' => 'A Chácara Horizonte é atualmente responsável por 20% da produção de hortaliças do perímetro irrigado do Manuel Alves.',
            'lat' => 5.5475586,
            'lng' => -47.3559811,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
