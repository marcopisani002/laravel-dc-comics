<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $comics = Comic::all();
       
      
       
        return view("comics.index", [
            "comics" => $comics
        ]);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // recuperiamo tutti i dati inviati dal form sotto forma di array associativo
         $data = $request->all();

       
 
         // Con i dati ricevuti, creo una nuova riga nel database
         $comic = new Comic();
         $comic->anno_uscita = $data["anno_uscita"];
         $comic->genere = $data["genere"];
         $comic->prezzo = (float) $data["prezzo"];
         $comic->disponibile = $data["disponibile"] === "si" ? 1 : 0;
         
         $comic->save();
 
         // Per evitare che l'utente rimanga sulla pagina in POST,
         // e ricaricando la pagina possa reinviare gli stessi dati,
         // reindirizziamo l'utente ad un'altra pagina a nostro piacimento.
         // Se la pagina ha un parametro dinamico, dobbiamo passarlo come secondo
         // argomento della funzione route.
         return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dalla tabella products, devo cercare un elemento che abbia l'id indicato
        // $product = Product::find($id);

        // Il find or fail, lavora come il find, con la differenza che se NON trova
        // quello che cerca, non ritorna null, ma lancia un errore 404 not found.
        $comic =Comic::findOrFail($id);

      

        // dd($product);
        return view("comics.show", [
            "comic" => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
