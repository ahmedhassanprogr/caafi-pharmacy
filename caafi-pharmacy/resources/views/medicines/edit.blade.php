@extends('layouts.app')

@section('title', 'Edit Medicine')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <h1 class="mb-4">Edit Medicine</h1>

        <form
            action="{{ route('medicines.update', $medicine->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <div class="mb-3">

                <label for="name" class="form-label">
                    Medicine Name
                </label>

                <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    name="name"
                    value="{{ old('name', $medicine->name) }}"
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
                    class="form-control @error('description') is-invalid @enderror"
                    id="description"
                    name="description"
                    rows="4"
                >{{ old('description', $medicine->description) }}</textarea>

                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="mb-3">

                <label for="quantity" class="form-label">
                    Quantity
                </label>

                <input
                    type="number"
                    class="form-control @error('quantity') is-invalid @enderror"
                    id="quantity"
                    name="quantity"
                    value="{{ old('quantity', $medicine->quantity) }}"
                    min="0"
                >

                @error('quantity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="mb-3">

                <label for="expiry_date" class="form-label">
                    Expiry Date
                </label>

                <input
                    type="date"
                    class="form-control @error('expiry_date') is-invalid @enderror"
                    id="expiry_date"
                    name="expiry_date"
                    value="{{ old('expiry_date', $medicine->expiry_date) }}"
                >

                @error('expiry_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <button type="submit" class="btn btn-primary">
                Update Medicine
            </button>

            <a
                href="{{ route('medicines.index') }}"
                class="btn btn-secondary"
            >
                Cancel
            </a>

        </form>

    </div>

</div>

@endsection

