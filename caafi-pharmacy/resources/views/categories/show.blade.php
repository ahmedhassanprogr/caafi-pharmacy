@extends('layouts.app')

@section('title', 'Category Details')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ $category->name }}</h1>

        <div>
            <a href="{{ route('categories.edit', $category->id) }}"
               class="btn btn-warning">
                Edit
            </a>

            <a href="{{ route('categories.index') }}"
               class="btn btn-secondary">
                Back
            </a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">

            <h5>Category Information</h5>

            <p>
                <strong>Name:</strong>
                {{ $category->name }}
            </p>

            <p>
                <strong>Description:</strong>
                {{ $category->description ?? 'No description' }}
            </p>

        </div>
    </div>

    <h3>Medicines in this Category</h3>

    <table class="table table-bordered mt-3">

        <thead>
            <tr>
                <th>#</th>
                <th>Medicine</th>
                <th>Quantity</th>
                <th>Expiry Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse($category->medicines as $medicine)

                <tr>
                    <td>{{ $medicine->id }}</td>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->quantity }}</td>
                    <td>{{ $medicine->expiry_date }}</td>
                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center">
                        No medicines in this category.
                    </td>
                </tr>

            @endforelse
        </tbody>

    </table>

</div>

@endsection