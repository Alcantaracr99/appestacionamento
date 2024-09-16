<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TpDocumento;

class TpDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentos = [
            ["documento" => "RG"],
            ["documento" => "CPF"],
            ["documento" => "CNPJ"],
            ["documento" => "Inscrição Estadual"]
        ];

        TpDocumento::insert($documentos);
    }
}
