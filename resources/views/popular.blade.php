@extends('layout')

@section('title')
    Popular
@endsection

@section('content')
    <h3>Popular</h3>

    @foreach ($articles as $article)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset($article->detail->image)}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$article->detail->title}}</h5>
            <p class="card-text">{{$article->detail->created_at}} | by : {{$article->writer->name}}</p>
            <p class="card-text text-truncate">{{$article->detail->content}}</p>
            <a class="btn btn-primary" href="{{route('detail-article', ['id' => $article->id])}}">Read more ...</a>
            </div>
        </div>
        </div>
    </div>
    @endforeach

    {{ $articles->links('pagination::simple-bootstrap-5') }}
@endsection
