@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-0">Products List</h2>
    <p class="text-sm text-muted">Overview of all products in your store</p>
    <div class="card">
        <div class="card-body">

            <a type="button" class="btn btn-primary" href="{{route('admin.products.create')}}">Add new product</a>

            <table class="table alingn-item-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Brand</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Category</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="aling-middle text-center">{{ $product->id }}</td>
                            <td class="aling-middle text-center">{{ $product->name }}</td>
                            <td class="aling-middle text-center">{{ $product->brand_id}}</td>
                            <td class="aling-middle text-center">{{ $product->category_id}}</td>
                            <td class="aling-middle text-center">${{ number_format($product->price, 2) }}</td>
                            <td class="aling-middle text-center">{{ $product->created_at}}</td>
                            <td class="aling-middle text-center">{{ $product->updated_at}}</td>
                            <td class="aling-middle text-center" > <a href="#" style="color: red;"> eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}


        </div>
    </div>
@endsection