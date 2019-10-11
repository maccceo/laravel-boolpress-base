<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ultimi 5 elementi salvati
        $elements = Post::orderBy('updated_at', 'desc') -> take(5) -> get();
        $elements = $this -> contentShrinker($elements, 150);

        $categories = Post::all();
        
        return view('pages.post_index', compact('elements','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elements = Post::all();
        return view("pages.post_create", compact('elements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
                'title' => 'required',
                'author' => 'required',
                'content' => 'required',
                'category_id' => 'required'
           ]);
        $elements = Post::create($validatedData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = Post::findOrFail($id);
        return view ('pages.post_show', compact('element'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = Post::findOrFail($id);
        $categories = Post::all();
        return view("pages.post_update", compact('element', 'categories'));
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
        $validatedData = $request -> validate([
                'title' => 'required',
                'author' => 'required',
                'content' => 'required',
                'category_id' => 'required'
           ]);
        Post::whereId($id) -> update($validatedData);
        return redirect('/');
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

    // # # ACCORCIATORE TESTO ARTICOLO DA HOMEPAGE
    private function contentShrinker($elements, $char) {
        
        foreach ($elements as $element) {
            // se il contenuto è più lungo del massimo consentito
            if(strlen($element -> content) > $char) {

                // cerco primo spazio dopo $char caratteri
                $pos = strpos($element -> content, ' ', $char);
                // tolgo tutto quello che viene dopo e aggiungo "..."
                $element -> content = substr($element -> content, 0, $pos) . "..."; 
            }
        }
        return $elements;
    }
}
