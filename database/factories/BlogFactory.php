<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{


       /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

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
            'images'=>'superadminstrator1675665592.jpg',
            // 'reference'=>'About Bio and all that',
            'category_id'=>'2',
            'user_id'=>'5',
        ];
    }
}
