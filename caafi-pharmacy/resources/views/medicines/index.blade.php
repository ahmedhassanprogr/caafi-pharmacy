@extends('layouts.app')

@section('content')

        <div class="container">
            <h1>Medicines</h1>
            <a href="{{ route('medicines.create') }}" class="btn btn-primary mb-3">Add New Medicine</a>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Expiry Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicines as $medicine)
                        <tr>
                            <td>{{ $medicine->id }}</td>
                            <td>{{ $medicine->name }}</td>
                            <td>{{ $medicine->description }}</td>
                            <td>{{ $medicine->quantity }}</td>
                            <td>{{ $medicine->expiry_date }}</td>
                            <td>
                                <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this medicine?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

          </div>

          @endsection