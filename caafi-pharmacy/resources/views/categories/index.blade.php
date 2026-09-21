@extends('layouts.app')

@section('title', 'Categories')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Categories</h1>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Medicines</th>
                <th width="220">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>

                    <td>{{ $category->name }}</td>

                    <td>
                        {{ $category->description ?? 'No description' }}
                    </td>

                    <td>
                        {{ $category->medicines_count }}
                    </td>

                    <td>
                        <a href="{{ route('categories.show', $category->id) }}"
                           class="btn btn-sm btn-info">
                            View
                        </a>

                        <a href="{{ route('categories.edit', $category->id) }}"
                           class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        No categories found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection