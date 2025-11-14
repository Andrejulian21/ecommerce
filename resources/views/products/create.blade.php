@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-0">Add New Product</h2>
    <p class="text-sm text-muted">Fill in the details to add a new product to your store</p>
    <div class="card">
        <div class="card-body">
            <form>

                {{-- Product Name --}}
                <div class="input-group input-group-outline mb-3">
                    <label for="productName" class="form-label">
                        Product Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="productName" name="productName" class="form-control">
                </div>

                {{-- Brand --}}
                <div class="input-group input-group-outline mb-3">
                    <select id="productBrand" name="productBrand" class="form-control">
                        <option value="" disabled selected>Select a brand</option>
                        @foreach ($brands as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Price --}}
                <div class="input-group input-group-outline mb-3">
                    <label for="productPrice" class="form-label">
                        Price <span class="text-danger">*</span>
                    </label>
                    <input type="number" id="productPrice" name="productPrice" class="form-control">
                </div>

                {{-- Category --}}
                <div class="input-group input-group-outline mb-3">
                    <select id="productCategory" name="productCategory" class="form-control">
                        <option value="" disabled selected>Select a category</option>
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        
                    </select>
                </div>

                {{-- Description --}}
                <div class="input-group input-group-outline mb-3">
                    <label for="productDescription" class="form-label">
                        Description <span class="text-danger">*</span>
                    </label>
                    <textarea id="productDescription" name="productDescription" class="form-control" rows="4"></textarea>
                </div>


                {{-- Buttons --}}
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        Add Product
                    </button>
                    <button type="reset" class="btn btn-outline-secondary">
                        Clear Form
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
