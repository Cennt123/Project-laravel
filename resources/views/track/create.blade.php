@extends('base')

@section('content')

<div class="row">
    <div class="col-md-5 mx-auto" style="border: 1px solid" style="border-radius:10px">
        <h1 style="color: black">CREATE TRACK</h1>

        <form action="{{ url('tracks/create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="album_id">Select Genre</label>
                <select name="album_id" id="album_id" class="form-select" required>
                    <option hidden='true'>Select Genre</option>
                    <option selected disabled>Select Genre</option>
                    @foreach ($album as $albumId => $album)
                        <option value="{{ $albumId }}">{{ $album }}</option>
                    @endforeach
                </select>

                @error('album_id')
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
                <label for="duration">Duration</label>
                <input type="number" name="duration" class="form-control">
                @error('duration')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="composer">Composer</label>
                <input type="text" name="composer" class="form-control">
                @error('composer')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            
            <div class="form-group mt-2">
                <label for="track_number">Track Number</label>
                <input type="number" name="track_number" class="form-control">
                @error('track_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Add Track</button>
            </div>
        </form>
    </div>
</div>

@endsection
