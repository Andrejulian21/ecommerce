@extends('admin.layouts.app')

@section('content')
    <h1>Add new category</h1>

    <div class="card">
        <div class="cardbody">
            <div class="p-4">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    @error('name')
                        <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" class="form-control" name="name" value="{{old('name')}}">
                    </div>
                    <input type="submit" class="btn bg-gradient-success" name="Save" value="Save Category"> 
                    
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
