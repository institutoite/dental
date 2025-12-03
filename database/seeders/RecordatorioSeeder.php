<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recordatorio;
use App\Models\Cliente;
use Carbon\Carbon;

class RecordatorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = Cliente::all();
        if ($clientes->count() === 0) {
            return;
        }
        // Para cada cliente, crear recordatorios con fechas variadas
        $dias = [0, 1, 2, 3, 4, 5, 6];
        $i = 0;
        foreach ($clientes as $cliente) {
            $diasSumar = $dias[$i % count($dias)];
            Recordatorio::create([
                'cliente_id' => $cliente->id,
                'fecha' => Carbon::now()->addDays($diasSumar)->toDateString(),
                'mensaje' => 'Recordatorio para dentro de ' . $diasSumar . ' días',
                'enviado' => false,
            ]);
            $i++;
        }
    }
}
