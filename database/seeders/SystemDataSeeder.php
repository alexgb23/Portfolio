<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemDataSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiar datos previos antes de rellenar
        DB::table('projects')->truncate();
        DB::table('nodes')->truncate();

        // Insertar tus proyectos reales del stack
        DB::table('projects')->insert([
            [
                'title' => 'Sistema de Gestión Escolar POO',
                'description' => 'Aplicación de escritorio robusta desarrollada en Java aplicando patrones de diseño estructurales y persistencia de datos.',
                'technologies' => 'Java, MySQL, OOP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Orquestador de Microservicios en Linux',
                'description' => 'Despliegue automatizado de clústeres locales utilizando Docker, scripts en Python para monitoreo y políticas de red.',
                'technologies' => 'Docker, Linux, Python, Bash',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Controlador Inmótico de Iluminación KNX',
                'description' => 'Pasarela IoT para la automatización de edificios inteligentes comunicando controladores BACnet con sensores bajo el protocolo KNX.',
                'technologies' => 'KNX, BACnet, IoT, C++',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insertar nodos de infraestructura para tus métricas parpadeantes de React
        DB::table('nodes')->insert([
            [
                'node_name' => 'SRV-CENTRAL',
                'type' => 'SISTEMAS',
                'current_value' => 'CPU 22% | RAM 4.1GB',
                'status' => 'OK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'node_name' => 'NODE-KNX-01',
                'type' => 'DOMOTICA',
                'current_value' => 'ONLINE | 24.5°C',
                'status' => 'OK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'node_name' => 'GATEWAY-BACNET',
                'type' => 'INMOTICA',
                'current_value' => 'ALERTA RECONEXION',
                'status' => 'WARNING',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
