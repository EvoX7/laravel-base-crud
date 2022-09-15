<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

        return view('comics_page', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uData = $request->all();

        $comic = new Comic();
        $comic->title = $uData['title'];
        $comic->thumb = $uData['image_url'];
        $comic->series = $uData['series'];
        $comic->type = $uData['type'];
        $comic->price = $uData['price'];
        $comic->sale_date = $uData['sale_date'];
        $comic->description = $uData['description'];

        $comic->save();

        return redirect()->route('comics.show', compact('comic'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $comic = Comic::findOrfail($id);
        return view('show', compact('comic'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrfail($id);
        return view ('edit', compact('comic'));
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
        $uData = $request->all();


        $comic = new Comic();
        $comic->title = $uData['title'];
        $comic->thumb = $uData['image_url'];
        $comic->series = $uData['series'];
        $comic->type = $uData['type'];
        $comic->price = $uData['price'];
        $comic->sale_date = $uData['sale_date'];
        $comic->description = $uData['description'];

        $comic->save();

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    { 


        $comic = Comic::find($id);

        $comic->delete($id);

        return redirect()->route('comics.index');

    }
}
