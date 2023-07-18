<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dc_comic;

class DC_comicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics  = DC_comic :: all();

        return view('dc-comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dc-comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comics = $request -> all();

        $comic = Dc_comic :: create([

            'title' => $comics["title"],
            'description'=> $comics["description"],
            'thumb'=> $comics["thumb"],
            'price'=> $comics["price"],
            'series'=> $comics["series"],
            'sale_date'=> $comics["sale_date"],
            'type'=> $comics["type"],
        ]);

        return redirect() -> route("dc-comics.show", $comic -> id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Dc_comic :: findOrFail($id);

        return view('dc-comics.show', compact('comic'));
    }

    public function edit($id)
    {
        $comic = Dc_comic :: findOrFail($id);

        return view('dc-comics.edit', compact('comic'));
    }

    public function update(Request $request)
    {
        $comics = $request -> all();

        $comic = Dc_comic :: create([

            'title' => $comics["title"],
            'description'=> $comics["description"],
            'thumb'=> $comics["thumb"],
            'price'=> $comics["price"],
            'series'=> $comics["series"],
            'sale_date'=> $comics["sale_date"],
            'type'=> $comics["type"],
        ]);

        $comic -> update($comics);

        return redirect() -> route("dc-comics.show", $comic -> id);

    }
}
