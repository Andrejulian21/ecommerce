@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-0">Category List</h2>
    <p class="text-sm text-muted">Overview of all categories in your store</p>
    <div class="card"> 
        <div class="card-body">

            <a type="button" class="btn btn-primary" href="{{route('admin.categories.create')}}">Add new category</a>

            <table class="table alingn-item-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="aling-middle text-center">{{ $category->id }}</td>
                            <td class="aling-middle text-center">{{ $category->name }}</td>
                            <td class="aling-middle text-center">{{ $category->created_at}}</td>
                            <td class="aling-middle text-center">{{ $category->updated_at}}</td>
                            <td class="aling-middle text-center" > <a href="#" style="color: red;"> eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}

@endsection