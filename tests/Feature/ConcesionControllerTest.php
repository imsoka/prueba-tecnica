<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Provincia;

class ConcesionControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Asegurar que el metodo devuelve las concesiones correctas
     * dada una provincia
     *
     * @return void
     */
    public function test_can_return_concesiones()
    {
        $provincia = Provincia::factory()->hasConcesiones(10)->create();

        $response = $this->get('concesiones?provincia='. $provincia->id);

        $response->assertJsonStructure([
            'concesiones' => [
                '*' => [
                    'id',
                    'name',
                    'address',
                    'provincia_id',
                    'created_at',
                    'updated_at',
                ],
            ]
        ])
        ->assertStatus(200);
    }

    public function test_throws_404_status_code_if_provincia_doesnt_exist()
    {
        $response = $this->get('concesiones?provincia=999');

        $response->assertstatus(404);
    }
}
