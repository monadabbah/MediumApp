@extends('layouts.app')

@section('content')
<div class="container bg-white p-5" style="width: 58%;">
  <h2 class="m-2">Start Writing</h2>
  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-2">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
      @error('title')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group m-2">
      <label for="body">Body</label><br>
      <textarea class="form-control" name="body" rows="10" placeholder="Write something..."></textarea>
      @error('body')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="m-2">
      <label for="tags">Tags</label><br>
      <input class="form-control" type="text" data-role="tagsinput" name="tags" value="{{ old('tags') }}">
      @if ($errors->has('tags'))
        <span class="text-danger">{{ $errors->first('tags') }}</span>
      @endif
    </div>
    <div class="m-2">
      <label for="cover">Cover Image</label>
      <input type="file" class="form-control" name="cover">
    </div>
    <div class="m-2">
      <label for="images">Images</label>
      <input type="file" class="form-control" name="images[]" multiple>
    </div>
    <button type="submit" class="m-2 btn btn-primary">Submit</button>
</form>
</div>
@endsection