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
        $elements = Post::all();
        $categories = [];
        foreach ($elements as $element) {

            // # # ACCORCIO CONTENUTO
            // cerco primo spazio dopo 100 caratteri
            $pos = strpos($element -> content, ' ', 100);
            // tolgo tutto quello che viene dopo e aggiungo "..."
            $element -> content = substr($element -> content, 0, $pos) . "..."; 

            // # # ARRAY CON CATEGORIE
            // se la categoria non era stata salvata precedentemente
            if (!in_array($element -> category -> name, $categories)) {
                // la aggiungo
                $categories[] = $element -> category -> name;
            }
        }
        return view('pages.post_index', compact('elements','categories'));
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
