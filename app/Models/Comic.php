<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //rimangono esclusi | id |  timestemp
    protected $fillable = [
        
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "type",
        "sale_date",
        "artists",
        "writers"
    ];
    // il contrario di fillable | non puoi scrivere l' id | ma puoi scrivere un altro dato, anche se l' errore finirà poi al database
    // protected $guarded = [
    //     "id"
    // ];
}

