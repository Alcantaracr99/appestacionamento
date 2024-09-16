<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TpTelefone;

class TpTelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentos = [
            ["telefone" => "Residencial"],
            ["telefone" => "Comercial"],
            ["telefone" => "Particular"],
            ["telefone" => "WhatsApp"],
            ["telefone" => "Emergencial"],
        ];

        TpTelefone::insert($documentos);
    }
}
