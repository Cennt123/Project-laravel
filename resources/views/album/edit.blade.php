@extends('base')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid; border-radius: 10px;">
        <h1 style="color: black">EDIT ALBUM</h1>

        <form action="{{url('/albums/'.$album->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="artist_id">Select Artist</label>
                <input type="text" name="artist_name" id="artist_name" class="form-control" value="{{ $album->artist->artist_name }}" readonly>
                <input type="hidden" name="artist_id" value="{{ $album->artist_id }}">


                @error('artist_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- <div class="form-group mt-2">
                <label for="artist_id">Artist Name</label>
                <input type="text" name="artist_id" class="form-control" value="{{$album->artist_id}}" required>
                @error('artist_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div> --}}

            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$album->title }}" required>

                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="genre">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{$album->genre}}" required>
                @error('genre')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="release_date">Release Date</label>
                <input type="date" name="release_date" class="form-control" value="{{$album->release_date}}" required>
                @error('release_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary mt-3">Edit Album</button>
        </form>
    </div>
</div>

@endsection
