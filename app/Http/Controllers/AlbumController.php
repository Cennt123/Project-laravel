<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function album() {
        $albums = Album::orderBy('id')->get();
        return view('album/albums', ['albums' => $albums]);
    }
    public function create()
    {
        $artists = Artist::list();
        return view('album.create', ['artist' => $artists]);
    }

    public function store(Request $request){
        $request->validate([
            'artist_id' => 'required|numeric',
            'title' => 'required|nullable', // Make sure 'title' is required if it's not nullable in the database
            'genre' => 'required',
            'release_date' => 'required|date',
        ]);

        Album::create([
            'artist_id' => $request->artist_id,
            'title' => $request->title,
            'genre' => $request->genre,
            'release_date' => $request->release_date,
        ]);

        return redirect('/album ')->with('message', 'A new Album has been added');
    }

    public function edit(Album $album)
    {
        // $album = Album::with('artist')->find($album->id);
        $artists = Artist::all();
        return view('album.edit', compact('album', 'artists'));
    }

    public function update(Album $album, Request $request)
    {
        $request->validate([
            'artist_id' => 'required|numeric',
            'title' => 'required|nullable', // Make sure 'title' is required if it's not nullable in the database
            'genre' => 'required',
            'release_date' => 'required|date',
        ]);


        $album -> update($request->all());
        return redirect('/album')->with('message', "$album->artist_id has been updated.");
    }
    public function delete(Album $album)
    {
        try {
            $album->delete();
            return redirect('/album')->with('message', 'Album deleted successfully');
        } catch (\Exception $e) {
            return redirect('/album')->with('error', 'Error deleting album: ' . $e->getMessage());
        }
    }
    


//     public function destroy($id)
// {
//     $album = Album::find($id);

//     if (!$album) {
//         return redirect('/albums')->with('message', 'Album not found.');
//     }

//     $album->delete(); // Soft delete

//     return redirect('/albums')->with('message', 'Album deleted successfully.');
// }

}
