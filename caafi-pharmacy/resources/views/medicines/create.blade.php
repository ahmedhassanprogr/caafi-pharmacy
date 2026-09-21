

@extends('layouts.app')




@section('content')
    <div class="container">
        <h1>Create Medicine</h1>

        <form action="{{ route('medicines.store') }} " method="POST">
            @csrf 

            <div class="mb-3">
                <label for="name" class="form-label">Medicine Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                </div>
                

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter medicine description"></textarea>
                </div>
                <div class="mb-3">
    <label for="category_id" class="form-label">Category</label>

    <select
        name="category_id"
        id="category_id"
        class="form-select @error('category_id') is-invalid @enderror"
    >
        <option value="">Select Category</option>

        @foreach($categories as $category)
            <option
                value="{{ $category->id }}"
                @selected(old('category_id') == $category->id)
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    @error('category_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
                
                

                <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" min="0" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                </div>
                <div class="mb-3">
                <label for="expiry_date" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" id="expiry_date" name="expiry_date" placeholder="Enter expiry date" required>
                </div>
                <div >
                
                <button type="submit" class="btn btn-primary mt-3">Create Medicine</button>
                </div>
            </div>
        </form>
    

@endsection