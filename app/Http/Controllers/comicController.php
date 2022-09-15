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

        $comic->slug = Str::slug($comic->title, '-', + 1);
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->slug]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)

    {
        $comic = Comic::where('slug', $slug)->first();
        return view('show', compact('comic'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $comic = Comic::where('slug', $slug)->first();
        return view ('edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $uData = $request->all();

        $comic = Comic::where('slug', $slug)->first();



        $comic = new Comic();
        $comic->title = $uData['title'];
        $comic->thumb = $uData['image_url'];
        $comic->series = $uData['series'];
        $comic->type = $uData['type'];
        $comic->price = $uData['price'];
        $comic->sale_date = $uData['sale_date'];
        $comic->description = $uData['description'];

        $comic->slug = Str::slug($comic->title, '-', + 1);
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->slug]);
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
