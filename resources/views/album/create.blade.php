@extends('base')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid" style="border-radius:10px">
        <h1 style="color: black">CREATE ALBUM</h1>

        <form action="{{ url('albums/create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="artist_id">Select Artist</label>
                <select name="artist_id" id="artist_id" class="form-select" required>
                    <option hidden='true'>Select User</option>
                    <option selected disabled>Select User</option>
                    @foreach ($artist as $artistId => $artist)
                        <option value="{{ $artistId }}">{{ $artist }}</option>
                    @endforeach
                </select>

                @error('artist_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="genre">Genre</label>
                <input type="text" name="genre" class="form-control">
                @error('genre')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="release_date">Release Date</label>
                <input type="date" name="release_date" class="form-control">
                @error('release_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Add Album</button>
            </div>
        </form>
    </div>
</div>

@endsection
