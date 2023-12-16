@extends('base')

@section('content')

<div class="row">

    <div class="col-md-5 mx-auto" style="border: 1px solid">
        <h1 style="color: black">CREATE ARTISTS</h1>
        <form action="{{url('artists/create')}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="artist_name">Artist Name</label>
                <input type="text" name="artist_name" class="form-control">
                @error('artist_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="genre">Genre</label>
                <input type="text" name="genre" class="form-control">
                @error('genre')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="origin">Origin</label>
                <input type="text" name="origin" class="form-control">
                @error('origin')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Add Artist</button>
            </div>
        </form>
    </div>
</div>



@endsection
