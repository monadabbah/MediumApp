@extends('layouts.app')
@section('content')
<div class="bg-white p-5">
    <h1 class="text-center">{{ $article->title }}</h1>
    <hr/>
    @if ($article->cover != '')
    <div class="d-flex justify-content-center">
        <img src="../images/{{$article->cover}}" alt="" style="width: 50%; height: 50%; max-height: 350px;">
    </div>
    @endif
    <br>
    <dl>   
        <dd>{{$article->description}}</dd>    
    </dl>
    @if ($photos->count())
    @foreach ($photos as $photo)
    <div class="m-2">
        <img src="../images/{{$photo->photo}}" alt="" style="width: 50%; height: 50%; max-height: 350px;">
    </div>
    @endforeach
    @endif
</div>
@endsection