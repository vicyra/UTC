<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Detail;
use App\Models\Writer;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = ['Interactive Multimedia', 'Software Engineering'];

        for($i=0;$i<2;$i++){
            Category::create([
                'category' => $categories[$i]
            ]);
        }

        $c = Category::all();

        Writer::factory()->count(10)->create();

        $writer = Writer::all();

        $title = ["Human Computer Interaction", "User Experience", "User Experience for Digital Immersive Technology", "Pattern Software Design", "Agile Software Development", "Code Reengineering"];

        foreach($c as $category){
            for($i=0;$i<3;$i++){

                    Article::create([
                        'writer_id' => $writer->random()->id,
                        'category_id' => $category->id
                    ]);

            }
        }

        $articles = Article::all();


        $counter = 0;
        foreach($articles as $article){
                Detail::create([
                    'article_id' => $article->id,
                    'date' => fake()->date(),
                    'title' => $title[$counter],
                    'image' => 'img/' . fake()->numberBetween(1,10) . '.jpg',
                    'content' => fake()->paragraph(15)
                ]);
                $counter++;
        }

        // for($i=0;$i<2;$i++){
        //     Category::create([
        //         'category' => $categories[$i]
        //     ]);
        // }

        // Category::factory()->count(2)->has(
        //     Writer::factory()->has(
        //         Article::factory()->count(3)->has(
        //             Detail::factory()
        //         )
        //     )
        // )->create();
    }
}
