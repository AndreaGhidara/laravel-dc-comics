<?php

namespace Database\Seeders;
//import del modello comicBook in Model (App/Models/comicBook.php)
use App\Models\comicBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicxTableSeeder extends Seeder
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

        foreach($comics as $comix) {
            //collego il nuovo fumetto al modell (App/Models/comicBook.php)
            $newComix = new comicBook();
            $newComix->title = $comix["title"];
            $newComix->description = $comix["description"];
            $newComix->thumb = $comix["thumb"];
            $newComix->price = $comix["price"];
            $newComix->series = $comix["series"];
            $newComix->type = $comix['type'];
            $newComix->sale_date = $comix["sale_date"];
            $newComix->artists = json_encode($comix["artists"]);
            $newComix->writers = json_encode($comix["writers"]);
            $newComix->save();
        }
    }
}
