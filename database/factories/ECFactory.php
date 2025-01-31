<?php

namespace Database\Factories;

use App\Models\UE;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class ECFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->regexify('EC[0-9]{3}'),
            'name' => $this->faker->words(3, true),
            'coefficient' => $this->faker->randomFloat(2, 1, 5),
            'ue_id' => UE::factory(),
            'teacher_id' => Teacher::factory(),
        ];
    }
}

