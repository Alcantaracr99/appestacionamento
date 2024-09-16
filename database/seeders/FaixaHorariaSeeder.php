<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FaixaHoraria;

class FaixaHorariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faixaHoraria = [
            ["faixa_horaria" => "Primeira hora"],
            ["faixa_horaria" => "Normal - 08h até 17h59"],
            ["faixa_horaria" => "Noturno - 18h até 23h59"],
            ["faixa_horaria" => "Pernoite - 00h até 7h59"],
            ["faixa_horaria" => "Feriado - Normal - 08h até 17h59"],
            ["faixa_horaria" => "Feriado - Noturno - 18h até 23h59"],
            ["faixa_horaria" => "Feriado - Pernoite - 00h até 7h59"],
            ["faixa_horaria" => "Mensalista"],
        ];

        FaixaHoraria::insert($faixaHoraria);
    }
}
