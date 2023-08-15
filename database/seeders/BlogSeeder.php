<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(){
        /*$blog=collect(Blog::all()->modelKeys());
        for($i=0; $i<100; $i++){
            ['name','description',];
        }*/
    
        $data = [
        [
            'name' => "Branche w gicie",
            'description' => "Chciałem zmerge'ować branche i wszystko poszło w kierunku mater",
            'status' => 1,
            'created_at' => "2023-05-24 16:48:56",
        ],
        [
            'name' => "Inflacja",
            'description' => "Zapłaciłem 75 zł za 2 2 litrowe coca-cole, 2 nutel...",
            'status' => 1,
            'created_at' => "2023-05-18 19:16:16",
        ],
        [
            'name' => "2 Waliki Amadeusza na jednej gali",
            'description' => "Czy mu odwaliło?",
            'status' => 1,
            'created_at' => "2023-05-20 16:24:50",
        ],
        [
            'name' => "Krewetki",
            'description' => "Gdybym był bogaty jadłbym krewetki, ale jestem biedny i muszę zajadać się pierogami z omastą.",
            'status' => null,
            'created_at' => "2023-08-12 20:45:29",
       ],
        [
            'name' => "Jak wytresować smoka?",
            'description' => "Pasem.",
            'status' => null,
            'created_at' => "2023-05-18 14:51:59",
        ],
        [
            'name' => "merge",
            'description' => "Ciekawe czy jak to wszystko zmerguje, to mi się to...",
            'status' => null,
            'created_at' => "2023-05-24 15:14:36",
        ],
        [
            'name' => "Użyłem Seederów",
            'description' => "Ciekawe czy mi to wyjdzie, tak jak planowałem",
            'status' => 1,
            'created_at' => "2023-08-15 15:14:36",
        ]
        ];

        foreach ($data as $entry) {
            Blog::create($entry);
        }
    }
}