
@extends('base')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif

<div class="row m-5">
    <h1 style="color: black">ARTISTS</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Genre</th>
                <th>Origin</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($artists as $artist): ?>

                <tr>
                    <td>{{$artist->id}}</td>
                    <td>{{$artist->artist_name}}</td>
                    <td>{{$artist->genre}}</td>
                    <td>{{$artist->origin}}</td>
                    <td class="text-center">
                        <a href="{{url('/artists/'.$artist->id)}}" class = "btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>

                    </td>
                    <td>
                        <form action="{{ url('/artists/'.$artist->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this artist?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M1.5 3.5a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 0 1h-12a.5.5 0 0 1-.5-.5zM12.5 14a1.5 1.5 0 0 1-1.5-1.5V5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-.5.5zM5.854 8.354a.5.5 0 0 1 0 .707l-1.646 1.646a.5.5 0 0 1-.708 0l-1.646-1.646a.5.5 0 1 1 .708-.708L4 9.793l1.646-1.647a.5.5 0 0 1 .708 0zM13 1a1 1 0 0 1 1 1v1H2V2a1 1 0 0 1 1-1h3.973L5.318 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a1 1 0 0 1-1-1h-1z"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{url('/artist/create')}}" class="btn btn-primary me-md-2" type="button">Add New Artist</a>
    </div>

</div>

@endsection
