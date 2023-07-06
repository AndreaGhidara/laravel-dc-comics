<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    private function validateProduct($data) {
        $validator = Validator::make($data, [
            "title" => "required|min:5|max:100",
            "description" => "min:5|max:65535",
            "thumb" => "max:65535",
            "price" => "min:4|max:100",
            "series" => "min:5|max:100",
            "sale_date" => "max:100",
            "type" => "required|max:100",
            "sale_date" => "required|max:100",
            "type" => "required|max:20",
            "artists" => "max:3000",
            "writers" => "max:3000",
        ], [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",

            "price.required" => "Il price è obbligatorio",
            "price.min" => "Il price deve essere almeno di 4 cifre 00.00",

            "sale_date.required" => "La data è obbligatorio",

            "type.required" => "Il type è obbligatorio",
            ])->validate();

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateProduct( $request->all() );

        $newProduct = new Comic;
        $newProduct->title = $data['title'];
        $newProduct->description = $data['description'];
        $newProduct->thumb = $data['thumb'];
        $newProduct->price = $data['price'];
        $newProduct->series = $data['series'];
        $newProduct->sale_date = $data['sale_date'];
        $newProduct->type = $data['type'];
        $newProduct->artists = json_decode($data['artists']);
        $newProduct->writers = json_decode($data['writers']);
        $newProduct->save();
        
        
        return redirect()->route('comics.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show(Comic $comic)
    {
        // $comic = comic::find($id);
        // $comic = comic::findOrFail($id);

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {
        $data = $this->validateProduct( $request->all() );
        
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = json_encode($data['artists']);
        $comic->writers = json_encode($data['writers']);
        $comic->update();

        // dump() stampa i dati e continua l'esecuzione
        // per interrompere il flusso usare dd() oppure ddd()
        // dd($product);
        // dd($request);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
