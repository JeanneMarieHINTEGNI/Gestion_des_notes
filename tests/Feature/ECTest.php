<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\EC;

class ECTest extends TestCase
{
    use RefreshDatabase;

    public function test_creation_ec_valide()
    {
        $ec = EC::factory()->create([
            'code' => 'EC01',
            'nom' => 'Introduction à la Programmation',
            'coefficient' => 2,
        ]);

        $this->assertDatabaseHas('elements_constitutifs', [
            'code' => 'EC01',
        ]);
    }

    public function test_coefficient_valide()
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);

        EC::create([
            'code' => 'EC02',
            'nom' => 'Mathématiques Avancées',
            'coefficient' => 6, 
        ]);
    }
}
