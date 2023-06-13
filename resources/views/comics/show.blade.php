@extends('layout.main')

@section('content')
        <div class="title-container d-flex justify-content-center">
            <h2 class="my-1 text-center text-warning fw-bold align-middle">{{ $comic->title }}</h2>
        </div>
        <div class="edit-container d-flex align-items-center my-2">
            <a href="#" class="btn btn-info fw-bold"><i class="fa-solid fa-pencil fa-lg"></i></a>
        </div>
    <div class="row row-cols-2 w-75 d-flex justify-content-center align-items-center">
        <div class="col d-flex align-items-end flex-column">
            <img src="{{ $comic->thumb }}" class="w-50 mb-2" alt="comic-thumb">
        </div>
        <div class="col">
            <h5><span class="text-primary">Series:</span> {{ $comic->series }}</h5>
            <h5><span class="text-primary">Type:</span> {{ $comic->type }}</h5>
            <h5><span class="text-primary">Sale Date:</span> {{ $comic->sale_date }}</h5>
            <h6><span class="text-primary">Writers:</span> {{ $comic->writers }}</h6>
            <h6><span class="text-primary">Artists:</span> {{ $comic->artists }}</h6>
            <p>{{ $comic->description }}</p>
            <h5 class="text-center"><span class="text-primary">Price:</span> {{ $comic->price }}</h5>
        </div>

    </div>
@endsection
