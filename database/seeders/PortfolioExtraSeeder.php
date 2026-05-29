<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Server;
use App\Models\Metric;

class PortfolioExtraSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Poblamos datos de Servidores / Infraestructura
        Server::create([
            'hostname' => 'vps-render-backend',
            'os' => 'Linux Ubuntu 22.04 LTS',
            'public_ip' => '142.250.200.46',
            'cpu_usage' => '8%',
            'ram_usage' => '512MB / 1GB',
            'uptime' => '99.95%'
        ]);

        Server::create([
            'hostname' => 'home-lab-raspberry',
            'os' => 'Raspbian OS (Debian)',
            'public_ip' => '192.168.1.150 (LAN)',
            'cpu_usage' => '24%',
            'ram_usage' => '1.8GB / 4GB',
            'uptime' => '100%'
        ]);

        // 2. Poblamos datos de Telemetría e Inmótica
        Metric::create([
            'room' => 'Laboratorio de Redes',
            'parameter' => 'Temperatura Rack',
            'value' => 24.8,
            'unit' => '°C'
        ]);

        Metric::create([
            'room' => 'Cuadro Eléctrico Inmótico',
            'parameter' => 'Consumo General',
            'value' => 1.45,
            'unit' => 'kW'
        ]);

        Metric::create([
            'room' => 'Servidor Principal',
            'parameter' => 'Humedad Ambiente',
            'value' => 45.2,
            'unit' => '%'
        ]);
    }
}
