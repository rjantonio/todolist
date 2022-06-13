<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tarea;


class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Tarea::class;

    public function definition()
    {
        return [
            "titulo" => $this->faker->word(),
            "texto" => $this->faker->text(),
            "fecha"  => $this->faker->date(),
            "idusu" => rand(1,10),
        ];
    }
}
