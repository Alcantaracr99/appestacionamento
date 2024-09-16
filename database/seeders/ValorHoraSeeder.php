<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ValorHora;

class ValorHoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valores = [
            ["valor_hora" => 4.00, "faixa_horaria" => 1, "desconto" => 0],
            ["valor_hora" => 6.00, "faixa_horaria" => 2, "desconto" => 0],
            ["valor_hora" => 8.00, "faixa_horaria" => 3, "desconto" => 0],
            ["valor_hora" => 20.00, "faixa_horaria" => 4, "desconto" => 0],
            ["valor_hora" => 7.00, "faixa_horaria" => 5, "desconto" => 0],
            ["valor_hora" => 10.00, "faixa_horaria" => 6, "desconto" => 0],
            ["valor_hora" => 24.00, "faixa_horaria" => 7, "desconto" => 0],
            ["valor_hora" => 200.00, "faixa_horaria" => 8, "desconto" => 0]
        ];

        ValorHora::insert($valores);
    }
}
