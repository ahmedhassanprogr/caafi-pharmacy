```blade
@extends('layouts.app')

@section('title', 'Medicine Details')

@section('content')

<h1 class="mb-4">Medicine Details</h1>

<div class="card">

    <div class="card-body">

        <h3 class="card-title">
            {{ $medicine->name }}
        </h3>

        <p>
            <strong>Description:</strong>
            {{ $medicine->description ?? 'N/A' }}
        </p>

        <p>
            <strong>Quantity:</strong>
            {{ $medicine->quantity }}
        </p>

        <p>
            <strong>Expiry Date:</strong>
            {{ $medicine->expiry_date }}
        </p>

        <a
            href="{{ route('medicines.edit', $medicine->id) }}"
            class="btn btn-warning"
        >
            Edit
        </a>

        <a
            href="{{ route('medicines.index') }}"
            class="btn btn-secondary"
        >
            Back
        </a>

    </div>

</div>

@endsection
```
