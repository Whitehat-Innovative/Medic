<?php

namespace Database\Factories;

use App\Models\Research;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResearchFactory extends Factory
{

          /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Research::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author'=> $this->faker->name,
            'title'=>'Biology',
            'content'=>'About Bio',
            'image'=>'img',
            'reference'=>'About Bio and all that',
            'category'=>'Biology',
            'user_id'=>'5',

        ];
    }
}
