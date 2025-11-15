@extends('layouts.app')

@section('css')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Header */
    .header {
        text-align: center;
        margin-bottom: 50px;
    }

    .header h1 {
        color: white;
        font-size: 3rem;
        margin-bottom: 10px;
        text-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    .header p {
        color: rgba(255,255,255,0.8);
        font-size: 1.2rem;
    }

    /* ==== FILTRO ==== */
    .filter-container {
        text-align: center;
        margin-bottom: 40px;
    }

    .filter-buttons {
        display: inline-flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .filter-btn {
        padding: 10px 22px;
        border-radius: 12px;
        border: 2px solid #f39c12;
        cursor: pointer;
        background: white;
        font-weight: 700;
        color: #f39c12;
        transition: all .3s ease;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: #f39c12;
        color: white;
    }

    /* Product grid */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
    }

    .product-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        transition: all 0.4s ease;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.3);
    }

    .product-image {
        width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f5f5f5;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .product-info {
        padding: 25px;
    }

    .product-category {
        color: #e67e22;
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .product-brand {
        color: #667eea;
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .product-name {
        font-size: 1.4rem;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .product-description {
        color: #7f8c8d;
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 20px;
        height: 60px;
        overflow: hidden;
    }

    .product-price {
        font-size: 1.8rem;
        font-weight: bold;
        color: #e74c3c;
        margin-bottom: 20px;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

</style>
@endsection



@section('content')
<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h1>Nuestros Productos</h1>
        <p>Discover the best selection with guaranteed quality</p>
    </div>

    <!-- FILTRO -->
    <div class="filter-container">
        <div class="filter-buttons">

            {{-- TODOS --}}
            <a href="{{ url('/') }}"
               class="filter-btn {{ $selectedCategory == null ? 'active' : '' }}">
                Todos
            </a>

            {{-- CATEGORÍAS DINÁMICAS --}}
            @foreach($categories as $category)
                <a href="{{ url('/?category=' . $category->id) }}"
                   class="filter-btn {{ $selectedCategory == $category->id ? 'active' : '' }}">
                    {{ $category->name }}
                </a>
            @endforeach

        </div>
    </div>

    <!-- PRODUCTOS -->
    <div class="products-grid">

        @forelse($products as $product)
            <div class="product-card">

                <div class="product-image">
                    <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-silver-select-202310?wid=940&hei=1112&fmt=png-alpha&.v=1697037914549" alt="">
                </div>

                <div class="product-info">
                    <div class="product-category">{{ $product->category->name ?? 'No category' }}</div>
                    <div class="product-brand">{{ $product->brand->name ?? 'No brand' }}</div>


                    <h3 class="product-name">{{ $product->name }}</h3>

                    <p class="product-description">
                        {{ Str::limit($product->description, 120) }}
                    </p>

                    <div class="product-price">
                        ${{ number_format($product->price, 2) }}
                    </div>
                </div>

            </div>
        @empty

            <p class="text-center text-white" style="font-size: 1.5rem; width: 100%;">
                No hay productos en esta categoría.
            </p>

        @endforelse

    </div>

    <!-- PAGINACIÓN -->
    <div class="pagination">
        {{ $products->links() }}
    </div>

</div>
@endsection
