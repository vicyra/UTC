@extends('layout')

@section('title')
    Detail Article
@endsection

@section('content')
    <h3>{{$article->category->category}}</h3>
    <div class="card col-md-9 justify-self-center">
        <img class="img-fluid rounded" src="{{asset($article->detail->image)}}" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$article->detail->datep}} | by : {{$article->writer->name}}</h5>
          <p class="card-text">{{$article->detail->content}}</p>

        </div>
      </div>
@endsection
