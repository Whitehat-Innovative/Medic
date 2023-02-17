<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{


      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'status'=>'pending',
            'email'=>'About Bio',
            'comment'=>'test comment for blog 1',
            'blog_id'=>'1',

        ];
    }
}
