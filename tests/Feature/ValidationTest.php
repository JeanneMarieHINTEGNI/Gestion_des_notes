<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_validation_ue()
    {
        $ue = UE::factory()->create();
        $etudiant = Etudiant::factory()->create();
        $ec = EC::factory()->create(['ue_id' => $ue->id, 'coefficient' => 2]);

        Note::create([
            'etudiant_id' => $etudiant->id,
            'ec_id' => $ec->id,
            'note' => 12,
            'session' => 'normale',
        ]);

        $this->assertTrue($ue->estValidee($etudiant));
    }
}

