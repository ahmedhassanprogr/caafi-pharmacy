@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to Caafi Pharmacy</div>

                <div class="card-body">
                    <p> Kusoo dhawow  caafi pharmacy hargeisa branch suuqa hoose , </p>
                    <a href="{{ route('medicines.index') }}" class="btn btn-primary">View Medicines</a>
                    <a href="{{ route('medicines.create') }}" class="btn btn-success">Add New Medicine</a>
                </div>
            </div>
        </div>
</div>


@endsection
