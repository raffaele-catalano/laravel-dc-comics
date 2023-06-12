@extends('layout.main')

@section('content')
    <div class="container">
        <h3 class="my-2 text-center">Comics List</h3>
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
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success text-uppercase">go</a>
                            <a href="#" class="btn btn-warning text-uppercase">edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
