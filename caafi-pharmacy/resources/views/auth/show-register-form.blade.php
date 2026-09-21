@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row flex justify-content-center">
        <div class="col-md-8">
            <div class="display-4 mb-4">Register</div>
            <form method="post" action="{{ route('auth.register') }}">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control mb-3" id="name" name="name" required>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control mb-3" id="email" name="email" required>
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control mb-3" id="password" name="password" required>
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation" required>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>


@endsection
