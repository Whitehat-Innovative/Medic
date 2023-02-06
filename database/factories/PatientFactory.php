<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class PatientFactory extends Factory
{
    

      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'image' => 'superadminstrator1675665592.jpg',
            'illness_description' => $this->faker->name,
            'illness_name' => 'Cough',
            'target_fund' => '30000',
            'age' => 20,
            'sex' => 'female',
          
        ];
    }
}
