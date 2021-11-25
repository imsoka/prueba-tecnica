<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['name' => 'ALAVA'])
            ->concesiones()->create([
                'name' => 'CIARSA',
                'address' => 'Alto de Armentia, 4 - Vitoria'
            ]);
        Provincia::create(['name' => 'LLEIDA'])
            ->concesiones()->createMany([
                ['name' => 'AUTODALSER DALMAU, S.L.', 'address' => 'P.I. El Segre c/. Josep Baró i Travé, 117 bis - Lleida'],
                ['name' => 'SERVISIMÓ, S.L.', 'address' => 'Avda. Barcelona, 19 - Tárrega'],
                ['name' => 'SERVISIMÓ, S.L.', 'address' => 'Avda. Europa, Polígono Industrial Goltparc - Golmes Mollerusa'],
            ]);
        Provincia::create(['name' => 'MADRID'])
            ->concesiones()->createMany([
                ['name' => 'ARDASA 2.000, S.A.', 'address' => 'Avda. Carlos Sainz, 39-41 - Leganés'],
                ['name' => 'ARDASA 2.000, S.A.', 'address' => 'C/ Almendro, nº 8 - Fuenlabrada'],
                ['name' => 'COMATRA VEHIC. COMERCIALES, S.L.', 'address' => 'C. Eratostenes, 4, Polígono Industrial El Lomo - Getafe'],
                ['name' => 'F. TOME, S.A.', 'address' => 'C. Tauro, 27 - Madrid'],
                ['name' => 'MOTOR GÓMEZ VILLALBA, S.A.', 'address' => 'Av. Juan Carlos I, 24 - Collado Villalba'],
                ['name' => 'SEALCO MOTOR, S.A.', 'address' => 'Ctra. S. M.Valdeiglesias, n.32 - Alcorcón'],
                ['name' => 'VOLKSWAGEN MADRID, S.A.', 'address' => 'C/ De Sofía, 18 - Madrid'],
            ]);
        Provincia::create(['name' => 'VALENCIA'])
            ->concesiones()->createMany([
                ['name' => 'LEVANTE WAGEN, S.A.', 'address' => 'Avda. Cid, 152 - Valencia'],
                ['name' => 'TALLERS XÀTIVA, S.A.', 'address' => 'C. Llosa de Ranes, 5 Polig. C, s/n - Xàtiva'],
            ]);
    }
}
