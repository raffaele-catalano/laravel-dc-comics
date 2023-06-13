@extends('layout.main')

@section('content')
    <div class="container">
        <div class="title-container d-flex justify-content-center">
            <h2 class="m-3 text-center text-primary fw-bold align-middle">Comics List</h2>
            <div class="create-container d-flex align-items-center">
                <a href="{{ route('comics.create') }}" class="btn btn-success fw-bold"><i class="fa-solid fa-plus fa-xl"></i></a>
            </div>
        </div>
        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

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
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary fw-bold"><i class="fa-solid fa-eye fa-lg"></i></a>
                            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning fw-bold ms-1"><i class="fa-solid fa-pencil fa-lg"></i></a>
                            <form
                                action="{{ route('comics.destroy', $comic) }}"
                                method="POST"
                                class="d-inline ms-1"
                                onsubmit="return confirm('{{ $comic->title }} will be deleted, are you sure?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger fw-bold"><i class="fa-solid fa-trash-can fa-lg"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
