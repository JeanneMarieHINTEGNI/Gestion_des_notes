<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    use RefreshDatabase;

   /** @test */
public function it_fails_to_create_an_ec_with_invalid_data(): void
{
    // Préparation de données invalides
    $data = [
        'code' => '', // Code manquant
        'name' => 'Programmation Avancée',
        'coefficient' => -1, // Coefficient négatif
        'ue_id' => 999, // UE inexistante
        'teacher_id' => null, // Facultatif mais accepté
    ];

    // Requête POST avec des données invalides
    $response = $this->post(route('ecs.store'), $data);

    // Vérifications
    $response->assertSessionHasErrors(['code', 'coefficient', 'ue_id']);
    $this->assertDatabaseMissing('ecs', ['name' => 'Programmation Avancée']);
}
}

