<?php

namespace Tests\Feature;

use App\Models\EC;
use App\Models\UE;
use App\Models\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ECControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_ec_successfully(): void
    {
        // Préparation des données
        $ue = UE::factory()->create(); // Crée une UE via une Factory
        $teacher = Teacher::factory()->create(); // Crée un enseignant via une Factory

        $data = [
            'code' => 'EC101',
            'name' => 'Programmation Avancée',
            'coefficient' => 2.0,
            'ue_id' => $ue->id,
            'teacher_id' => $teacher->id,
        ];

        // Requête POST pour créer un EC
        $response = $this->post(route('ecs.store'), $data);

        // Vérifications
        $response->assertRedirect(route('ecs.index'));
        $this->assertDatabaseHas('ecs', ['code' => 'EC101', 'name' => 'Programmation Avancée']);
    }
}


