<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function track() {
        $tracks = Track::orderBy('id')->get();
        return view('track/tracks', ['tracks' => $tracks]);
    }

    public function create()
    {
        $albums = Album::list();
        return view('track.create', ['album' => $albums]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'album_id' => 'required|numeric',
            'title' => 'required',
            'duration' => 'required',
            'composer' => 'required',
            'track_number' => 'required|numeric',
        ]);
    
        Track::create([
            'album_id' => $request->album_id,
            'title' => $request->title,
            'duration' => $request->duration,
            'composer' => $request->composer,
            'track_number' => $request->track_number,
        ]);
    
        return redirect('/track')->with('message', 'A new Track has been added');
    }

    public function edit(Track $track)
    {
        // $album = Album::with('artist')->find($album->id);
        $albums = Album::all();
        return view('track.edit', compact('track', 'albums'));
    }

    public function update(Track $track, Request $request)
    {
        $request->validate([
            'album_id' => 'required|numeric',
            'title' => 'required',
            'duration' => 'required',
            'composer' => 'required',
            'track_number' => 'required|numeric',
        ]);
    

        $track -> update($request->all());
        return redirect('/track')->with('message', "$track->album_id has been updated.");
    }

    public function destroy($id)
    {
        $track = Track::findOrFail($id);

        try {
            $track->delete();
            return redirect('/track')->with('message', 'Track deleted successfully');
        } catch (\Exception $e) {
            return redirect('/track')->with('error', 'Error deleting track: ' . $e->getMessage());
        }
    }
    
}
