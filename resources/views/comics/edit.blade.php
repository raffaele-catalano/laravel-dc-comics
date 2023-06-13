@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="my-2 fw-bold text-center">{{ $comic->title }}</h2>

        @if ($errors->any())
            <div class="alert alert-warning" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title (*)</label>
                <input id="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" type="text">
                    @error('title')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea cols="30" rows="10" id="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" type="text"></textarea>
                    @error('description')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb Path (*)</label>
                <input id="thumb" value="{{ old('thumb') }}" class="form-control @error('thumb') is-invalid @enderror"
                name="thumb" placeholder="Thumb Path" type="text">
                    @error('thumb')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (*)</label>
                <input id="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror"
                name="price" placeholder="Price" type="text">
                    @error('price')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input id="series" value="{{ old('series') }}" class="form-control @error('series') is-invalid @enderror"
                name="series" placeholder="Series" type="text">
                    @error('series')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date (*)</label>
                <input id="sale_date" value="{{ old('sale_date') }}"
                class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" placeholder="Sale Date"
                type="text">
                    @error('sale_date')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input id="type" value="{{ old('type') }}"
                class="form-control @error('type') is-invalid @enderror" name="type" placeholder="Type"
                type="text">
                    @error('type')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input id="artists" value="{{ old('artists') }}"
                class="form-control @error('artists') is-invalid @enderror" name="artists" placeholder="Artists"
                type="text">
                    @error('artists')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input id="writers" value="{{ old('writers') }}"
                class="form-control @error('writers') is-invalid @enderror" name="writers" placeholder="Writers"
                type="text">
                    @error('writers')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="btn-container d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
@endsection
