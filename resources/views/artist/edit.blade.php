@extends('base')

@section('content')

<div class="row">

    <div class="col-md-5 mx-auto" style="border: 1px solid">
        <h1 style="color: black">EDIT ARTISTS</h1>
        <form action="{{url('/artists/'.$artist->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="artist_name">Artist Name</label>
                <input type="text" name="artist_name" class="form-control" value="{{$artist->artist_name}}" required>
                @error('artist_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="genre">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{$artist->genre}}" required>
                @error('genre')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="origin">Origin</label>
                <input type="text" name="origin" class="form-control" value="{{$artist->origin}}" required>
                @error('origin')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Edit Artist</button>
            </div>
        </form>
    </div>
</div>



@endsection
