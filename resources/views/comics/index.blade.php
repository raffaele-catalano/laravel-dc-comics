@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="my-2 text-center text-primary fw-bold">Comics List</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    {{-- <th scope="col">#id</th> --}}
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        {{-- <td>{{ $comic->id }}</td> --}}
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary fw-bold"><i class="fa-brands fa-golang fa-lg"></i></a>
                            <a href="#" class="btn btn-warning fw-bold"><i class="fa-solid fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger fw-bold"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
