@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="my-2 fw-bold">Add a new <span class="text-primary">Comic</span></h2>

        <form action="{{ route('comics.store') }}" method="POST" class="bg-dark">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title (*)</label>
                <input id="title" value="{{ old('title') }}" class="form-control"
                    name="title" placeholder="Title" type="text">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb Path (*)</label>
                <input id="thumb" value="{{ old('thumb') }}" class="form-control"
                    name="thumb" placeholder="Thumb Path" type="text">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description (*)</label>
                <input id="description" value="{{ old('description') }}" class="form-control"
                    name="description" placeholder="Description" type="text">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (*)</label>
                <input id="price" value="{{ old('price') }}" class="form-control"
                    name="price" placeholder="Price" type="text">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series (*)</label>
                <input id="series" value="{{ old('series') }}" class="form-control"
                    name="series" placeholder="Series" type="text">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date (*)</label>
                <input id="sale_date" value="{{ old('sale_date') }}"
                    class="form-control" name="sale_date" placeholder="Sale Date"
                    type="text">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type (*)</label>
                <input id="type" value="{{ old('type') }}"
                    class="form-control" name="type" placeholder="Type"
                    type="text">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists (*)</label>
                <input id="artists" value="{{ old('artists') }}"
                    class="form-control" name="artists" placeholder="Artists"
                    type="text">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers (*)</label>
                <input id="writers" value="{{ old('writers') }}"
                    class="form-control" name="writers" placeholder="Writers"
                    type="text">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
