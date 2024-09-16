<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusRegistro;

class StatusRegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ["status" => "Aberto"],
            ["status" => "Pago"],
            ["status" => "Fechado"],
            ["status" => "Cancelado"],
            ["status" => "Mensalista"]
        ];

        StatusRegistro::insert($status);
    }
}
