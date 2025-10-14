
@extends('layouts.app')

@section('css')
<style>
    .hero {
        padding: 3.5rem 0;
        background: linear-gradient(180deg, rgba(102,126,234,0.06), rgba(118,75,162,0.03));
        border-radius: .75rem;
    }
    .hero-img { max-height: 320px; object-fit: contain; border-radius: .5rem; }
    .category-card { transition: transform .15s ease-in-out; border-radius: .8rem; }
    .category-card:hover { transform: translateY(-6px); }
    .featured-grid { display:grid; grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); gap:1.25rem; }
    .featured-card img { height:160px; object-fit:cover; border-bottom-left-radius: .6rem; border-bottom-right-radius: .6rem; }
</style>
@endsection

@section('content')
<div class="container">


    <!-- Destacados -->
    <h4 class="mb-3">Productos destacados</h4>
    <div class="featured-grid mb-5">
        @if(isset($featured) && count($featured))
            @foreach($featured as $p)
            <div class="card featured-card featured-card h-100">
                <img src="{{ $p->image ? asset('storage/'.$p->image) : asset('images/product-placeholder.png') }}" class="card-img-top" alt="{{ $p->name }}">
                <div class="card-body">
                    <h6 class="card-title mb-1">{{ Str::limit($p->name, 50) }}</h6>
                    <p class="text-muted small mb-2">{{ Str::limit($p->description ?? '', 80) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="text-danger">@money($p->price ?? 0)</strong>
                        <a href="{{ route('products.show', $p->id) ?? '#' }}" class="btn btn-sm btn-outline-primary">Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            @for($i=0;$i<4;$i++)
            <div class="card featured-card h-100">
                <img src="{{ asset('images/product-placeholder.png') }}" class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h6 class="card-title mb-1">Producto {{ $i+1 }}</h6>
                    <p class="text-muted small mb-2">Descripción corta del producto.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="text-danger">$49.99</strong>
                        <a href="{{ url('/products') }}" class="btn btn-sm btn-outline-primary">Ver</a>
                    </div>
                </div>
            </div>
            @endfor
        @endif
    </div>

    <!-- Newsletter -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-9">
            <div class="p-4 bg-light rounded-3 d-flex flex-column flex-md-row align-items-center gap-3">
                <div class="flex-grow-1">
                    <h5 class="mb-1">Recibe ofertas y novedades</h5>
                    <p class="mb-0 text-muted">Suscríbete para obtener descuentos exclusivos.</p>
                </div>
                <form class="d-flex w-100" method="POST" action="{{ url('/newsletter') }}">
                    @csrf
                    <input type="email" name="email" class="form-control me-2" placeholder="Tu correo" required>
                    <button class="btn btn-primary">Suscribirme</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

