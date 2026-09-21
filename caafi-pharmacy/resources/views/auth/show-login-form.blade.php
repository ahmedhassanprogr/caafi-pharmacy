@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row flex justify-content-center">
        <div class="col-md-8">
            <div class="display-4 mb-4">login</div>
            <form method="post" action="{{ route('auth.login') }}">
            
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control mb-3" id="email" name="email" required>
                <label for="password" class="form-label">Password</label>
                
                <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation" required>
                <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </div>


@endsection
