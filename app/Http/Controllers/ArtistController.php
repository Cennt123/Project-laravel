<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function artist(){
        $artists = Artist::orderBy('id')->get();
        return view('artist/artists', ['artists' => $artists]);
    }

    public function create()
    {
        return view('artist/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'artist_name' => 'required',
            'genre' => 'required',
            'origin' => 'required',
        ]);

        Artist::create([
            'artist_name' => $request->artist_name,
            'genre' => $request->genre,
            'origin' => $request->origin,
        ]);

        return redirect('/artist')->with('message', 'A new Artist has been added');
    }

    public function edit(Artist $artist)
    {
        return view('artist.edit', compact('artist'));
    }

    public function update(Artist $artist, Request $request)
    {
        $request->validate([
            'artist_name' => 'required',
            'genre' => 'required',
            'origin' => 'required',
        ]);

        $artist -> update($request->all());
        return redirect('/artist')->with('message', "$artist->artist_name has been updated.");
    }

    // public function delete(Artist $artist)
    // {
    //     $artist->delete();

    //     return redirect('/artist')->with('message', "$artist->artist_name has been deleted successfully");
    // }

    // ArtistController.php

public function destroy($id)
{
   
    $artist = Artist::find($id);


    if (!$artist) {
        return redirect('/artist')->with('message', 'Artist not found.');
    }

  
    $artist->delete();

   
    return redirect('/artist')->with('message', 'Artist deleted successfully.');
}


}
