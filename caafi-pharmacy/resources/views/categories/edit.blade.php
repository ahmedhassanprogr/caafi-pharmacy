@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

<div class="container">

    <h1 class="mb-4">Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">
                Category Name
            </label>

            <input
                type="text"
                name="name"
                id="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $category->name) }}"
            >

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">
                Description
            </label>

            <textarea
                name="description"
                id="description"
                rows="4"
                class="form-control @error('description') is-invalid @enderror"
            >{{ old('description', $category->description) }}</textarea>

            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Update Category
        </button>

        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection