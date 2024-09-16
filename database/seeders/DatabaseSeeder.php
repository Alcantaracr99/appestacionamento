<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Documento;
use Illuminate\Database\Seeder;
use Database\Seeders\StatusRegistroSeeder;
use Database\Seeders\TpDocumentoSeeder;
use Database\Seeders\TpTelefoneSeeder;
use Database\Seeders\FaixaHorariaSeeder;
use Database\Seeders\ValorHoraSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cliente::factory(5)->create();
        $this->call(StatusRegistroSeeder::class);
        $this->call(TpDocumentoSeeder::class);
        $this->call(TpTelefoneSeeder::class);
        $this->call(FaixaHorariaSeeder::class);
        $this->call(ValorHoraSeeder::class);
    }
}
