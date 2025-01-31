<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Note;

class NotesTest extends TestCase
{
    use RefreshDatabase;
/** @test */
public function it_correctly_associates_an_ec_with_a_ue(): void
{
    $ue = UE::factory()->create(); // Crée une UE

    // Crée un EC et l'associe à la UE
    $ec = EC::factory()->create(['ue_id' => $ue->id]);

    // Vérifie que l'association existe
    $this->assertEquals($ue->id, $ec->ue->id);
}
}
