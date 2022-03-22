<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Streamers>
 */
class StreamersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tipo = ['TWITCH','YOUTUBE','T/Y'];
        $contenido=['MINECRAFT','BLOGS','COUNTER STRIKE','CLASH ROYALE','FIFA','LEAGUE OF LEGENDS','VALORANT','JUST CHATTING','TFT'];
        return [
            //RELLENA LA TABLA CON LO QUE LE DIGAMOS
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'tipo'=>$this->faker->randomElement($tipo),
            'contenido'=>$this->faker->randomElement($contenido),
            'viewers'=>$this->faker->randomNumber(6),
            'pais'=>$this->faker->country(),
        ];
    }
}
