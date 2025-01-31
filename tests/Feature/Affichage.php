<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Note;

class NotesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
public function it_displays_a_list_of_ecs(): void
{
    // Préparation des données
    $ecs = EC::factory()->count(3)->create(); // Crée 3 ECs via une Factory

    // Requête GET vers la page de la liste
    $response = $this->get(route('ecs.index'));

    // Vérifications
    $response->assertStatus(200);
    foreach ($ecs as $ec) {
        $response->assertSee($ec->name); // Vérifie que chaque EC est affiché
    }
}

}
