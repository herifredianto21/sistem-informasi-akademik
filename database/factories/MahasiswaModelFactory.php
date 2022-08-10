<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    // protected $model = MahasiswaModel::class;
    
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            // 'tmp_lahir' => $this->faker->city,
            'tgl_lahir' => $this->faker->date($format='Y-m-d', $max='now'),
            'umur' => $this->faker->numberBetween(25, 45),
            'jk' => $this->faker->randomElement([
                "male",
                "female",
                "others"
            ]),
            'no_telp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'email' => $this->faker->safeEmail

        ];
    }
}
