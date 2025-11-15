@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="font-weight-bolder mb-0">Add New Category</h3>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.brands.store') }}" method="POST">
            @csrf

            {{-- Nombre de la categoría --}}
            <div class="input-group input-group-outline mb-3 @error('name') is-invalid @enderror">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            @error('name')
                <span class="text-danger text-sm d-block mb-2">{{ $message }}</span>
            @enderror

            <button type="submit" class="btn bg-gradient-success mt-3">
                Save Brand
            </button>

        </form>
    </div>
</div>

@endsection
