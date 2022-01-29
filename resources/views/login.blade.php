@extends('layouts.app')
@section('content')
<div class="container bg-white p-5 col-md-5">
<h3 class="text-center mb-3 mt-3">Log in with your email account</h3>
<div>  
    @if (session('status'))
        <div class="p-2 mb-2 bg-danger text-white text-center rounded">{{ session('status') }}</div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group m-2">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
          @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group m-2">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" value="">
          @error('password')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-check m-2">
            <input type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="m-2 btn btn-primary">Submit</button>
    </form>
</div>
</div>
@endsection
