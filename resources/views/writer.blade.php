@extends('layout')

@section('title')
    Writers
@endsection

@section('content')
    <h3>Our Writers:</h3>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($writers as $writer)
            <div class="col-md-3">
            <a href="{{route('detail-writer', ['id' => $writer->id])}}">
            <div class="card">
                <img src="{{asset($writer->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$writer->name}}</h5>
                <p class="card-text">Spesialis {{$writer->spesialty}}</p>
                </div>
            </div>
            </a>
            </div>
        @endforeach
    </div>
@endsection
