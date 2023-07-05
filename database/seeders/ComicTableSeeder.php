<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//import del modello comic in Model (App/Models/comic.php)
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //prendo i fumetti al intento della config (comics.php)
        $comics = config("comics");

        foreach($comics as $comic) {
            //collego il nuovo fumetto al modell (App/Models/comic.php)
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->type = $comic['type'];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->artists = json_encode($comic["artists"]);
            $newComic->writers = json_encode($comic["writers"]);
            $newComic->save();
        }
    }
}
