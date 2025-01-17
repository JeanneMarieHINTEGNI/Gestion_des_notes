<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Note;

class NotesTest extends TestCase
{
    use RefreshDatabase;

    public function test_ajout_note_valide()
    {
        $note = Note::factory()->create([
            'note' => 15,
            'session' => 'normale',
        ]);

        $this->assertDatabaseHas('notes', [
            'note' => 15,
        ]);
    }

    public function test_limites_notes()
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);

        Note::create([
            'note' => 25, // Note invalide
            'session' => 'normale',
        ]);
    }
}
