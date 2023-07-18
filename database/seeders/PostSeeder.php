<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Post::create([
                'thumb'=>$faker->imageUrl(),
                'name' => $faker->name(),
                'price'=>$faker->randomFloat(2),
                'category'=>$faker->sentence(),
            ]);
        }
    }
}