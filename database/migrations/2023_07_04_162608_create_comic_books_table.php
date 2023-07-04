<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_books', function (Blueprint $comix) {
            $comix->id();
            
            $comix->string("title",100);
            $comix->text("description")->nullable();//Puo essere null
            $comix->text("thumb")->nullable();
            $comix->string("price",100);
            $comix->string("series",100)->nullable();
            $comix->string("type",100);
            $comix->date("sale_date",100);
            $comix->json("artists")->nullable();
            $comix->json("writers")->nullable();

            $comix->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_books');
    }
};
