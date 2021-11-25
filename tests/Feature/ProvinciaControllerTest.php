<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Provincia;

class ProvinciaControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Asegurar que el metodo index devuelva las provincias
     */
    public function test_can_return_provincias()
    {
        Provincia::factory()->count(10)->create();

        $response = $this->get('provincias');

        $response->assertJsonStructure([
            'provincias' => [
                '*' => [
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                ],
            ]
        ])
        ->assertStatus(200);
    }
}
