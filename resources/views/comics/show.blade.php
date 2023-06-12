@extends('layout.main')

@section('content')
<h2 class="text-center">{{ $comic->title }}</h2>
    <div class="row row-cols-2 w-75 d-flex justify-content-center align-items-center">
        <div class="col d-flex align-items-center flex-column">
            <img src="{{ $comic->thumb }}" class="w-50 mb-2" alt="comic-thumb">
            <p>{{ $comic->description }}</p>
        </div>
        <div class="col">
            <h4><span class="text-primary">Series:</span> {{ $comic->series }}</h4>
            <h5><span class="text-primary">Type:</span> {{ $comic->type }}</h5>
            <h5><span class="text-primary">Sale Date:</span> {{ $comic->sale_date }}</h5>
            <h5><span class="text-primary">Writers:</span> {{ $comic->writers }}</h5>
            <h5><span class="text-primary">Artists:</span> {{ $comic->artists }}</h5>
            <h5 class="text-end"><span class="text-primary">Price:</span> {{ $comic->price }}</h5>
        </div>

    </div>
@endsection
