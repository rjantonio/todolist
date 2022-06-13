<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Etiqueta;


class EtiquetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Etiqueta::class;

    public function definition()
    {
        return [
            "etiqueta" => $this->faker->word(),
            "color" => $this->faker->hexcolor(),
        ];
    }
}
