<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\UE;

class UETest extends TestCase
{
    use RefreshDatabase;

    public function test_creation_ue_valide()
    {
        $ue = UE::factory()->create([
            'code' => 'UE11',
            'nom' => 'Programmation Web',
            'credits_ects' => 6,
            'semestre' => 1,
        ]);

        $this->assertDatabaseHas('unites_enseignement', [
            'code' => 'UE11',
        ]);
    }

    public function test_credits_ects_valide()
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);

        UE::create([
            'code' => 'UE12',
            'nom' => 'Mathématiques',
            'credits_ects' => 35, // Crédit invalide
            'semestre' => 1,
        ]);
    }

    public function test_association_ecs()
    {
        $ue = UE::factory()->create();
        $ec = EC::factory()->create(['ue_id' => $ue->id]);

        $this->assertEquals($ue->id, $ec->ue_id);
    }
}

