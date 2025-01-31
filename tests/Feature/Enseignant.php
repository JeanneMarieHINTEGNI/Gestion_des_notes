<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    use RefreshDatabase;
/** @test */
public function it_correctly_associates_an_ec_with_a_teacher(): void
{
    $teacher = Teacher::factory()->create(); // Crée un enseignant

    // Crée un EC et l'associe à l'enseignant
    $ec = EC::factory()->create(['teacher_id' => $teacher->id]);

    // Vérifie que l'association existe
    $this->assertEquals($teacher->id, $ec->teacher->id);
}
}
