@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-2 mt-4">
  <h4 class="text-uppercase" style="font-weight: 700;">Articles on medium</h4>
  <a class="btn btn-primary" href="{{ route('articles.create') }}" role="button" style="font-weight: 700; margin-right: 18px;">Write an article</a>
</div>
  <div class="row justify-content-around">
    @if ($articles->count())
        @foreach ($articles as $article)
            <div class="card m-2" style="width: 41%;">
                <div class="card-body d-flex row">
                  <div class="col-md-8" style="padding-right: 3px;">
                    <h5 class="card-title" style="font-weight: 800;">{{ $article->title }}</h5>
                    <div class="d-flex mb-2">
                    <h6 class="card-subtitle text-muted">admin,</h6>
                    <h6 class="card-subtitle text-muted" style="margin-left: 5px; margin-right: 5px;">{{ $article->created_at->diffforHumans() }}</h6>
                    </div>
                    @if ($article->tags->count())
                    <div>
                      <strong>Tag:</strong>
                      @foreach($article->tags as $tag)
                      <label class="label label-info">{{ $tag->name }}</label>
                      @endforeach
                    </div>
                    @endif
                    <p class="card-text text-truncate">{{ $article->description }}</p>
                    <a href="{{ route('articles.show', $article) }}" class="card-link">Read more</a>
                  </div>
                  <div class="col-md-4">
                    @if ($article->cover != null)
                    <img src="images/{{$article->cover}}" alt="" style="width: 100%; height: 100%; max-height: 200px;">
                    @else 
                    <img src="{{ asset('images/medium_logo.png') }}" alt="" style="width: 100%; height: 100%;">
                    @endif
                  </div>
                </div>
            </div>
        @endforeach
        {{ $articles->links() }}
        @else
            <p>There are no articles</p>
        @endif         
        
  </div>
@endsection