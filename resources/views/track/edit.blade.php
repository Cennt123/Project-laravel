@extends('base')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid" style="border-radius:10px">
        <h1 style="color: black">EDIT TRACK</h1>

        <form action="{{ url('/tracks/'.$track->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="artist_id">Select Genre</label>
                <input type="text" name="genre" id="genre" class="form-control" value="{{ $track->album->genre }}" readonly>
                <input type="hidden" name="album_id" value="{{ $track->album_id }}">


                @error('album_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$track->title}}" required>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="duration">Duration</label>
                <input type="number" name="duration" class="form-control" value="{{$track->duration}}" required>
                @error('duration')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="composer">Composer</label>
                <input type="text" name="composer" class="form-control" value="{{$track->composer}}" required>
                @error('composer')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            
            <div class="form-group mt-2">
                <label for="track_number">Track Number</label>
                <input type="number" name="track_number" class="form-control" value="{{$track->track_number}}" required>
                @error('track_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Edit Track</button>
            </div>
        </form>
    </div>
</div>

@endsection
