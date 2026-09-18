@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Welcome to Caafi Pharmacy</h1>
    <p>This is the home page of the Caafi Pharmacy application.</p>
    <a href="{{ route('medicines.index') }}" class="btn btn-primary">View Medicines</a>
</div>


@endsection
