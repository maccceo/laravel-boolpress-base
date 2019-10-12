<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elements = Post::where('category_id', $id) -> get();
        $elements = $this -> contentShrinker($elements, 150);
        return view ('pages.category_show', compact('elements'));
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
