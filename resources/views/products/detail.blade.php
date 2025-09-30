@extends('layouts.app')

@section('css')
    <style>
        .product-detail-container {
            max-width: 1000px;
            margin: 48px auto 48px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.10);
            display: flex;
            gap: 32px;
            padding: 36px 32px;
        }

        .product-detail-image {
            flex: 1 1 340px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            background: #f6f8fa;
            border-radius: 12px;
            padding: 18px;
            min-width: 0;
        }

        .product-detail-image img {
            max-width: 320px;
            max-height: 340px;
            width: 100%;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(102, 126, 234, 0.07);
        }

        .product-detail-info {
            flex: 2 1 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 18px;
        }

        .product-detail-category {
            display: inline-block;
            background: #667eea;
            color: #fff;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 16px;
            text-transform: uppercase;
            margin-bottom: 6px;
            letter-spacing: 1px;
        }

        .product-detail-brand {
            color: #764ba2;
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-detail-title {
            font-size: 2.1rem;
            font-weight: bold;
            color: #22223b;
            margin-bottom: 8px;
            line-height: 1.2;
        }

        .product-detail-price {
            font-size: 2.3rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .product-detail-description {
            color: #34495e;
            font-size: 1.08rem;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .product-detail-actions {
            margin-top: 18px;
        }

        .buy-button {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: none;
            padding: 15px 38px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 10px rgba(102, 126, 234, 0.10);
        }

        .buy-button:hover {
            background: linear-gradient(90deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px) scale(1.03);
        }

        @media (max-width: 900px) {
            .product-detail-container {
                flex-direction: column;
                align-items: center;
                padding: 24px 10px;
                gap: 20px;
            }

            .product-detail-image img {
                max-width: 260px;
                max-height: 260px;
            }
        }

        @media (max-width: 600px) {
            .product-detail-container {
                padding: 10px 2px;
            }

            .product-detail-title {
                font-size: 1.3rem;
            }

            .product-detail-price {
                font-size: 1.3rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="product-detail-container">
        <div class="product-detail-image">
            <img src="https://i.blogs.es/1cc524/img_1796/375_375.jpeg" alt="Google Pixel 8 Pro">
        </div>
        <div class="product-detail-info">
            <span class="product-detail-category">Electronics</span>
            <span class="product-detail-brand">Google</span>
            <h1 class="product-detail-title">Pixel 8 Pro 256GB</h1>
            <div class="product-detail-price">$999.99</div>
            <div class="product-detail-description">
                Google's flagship smartphone with a Tensor G3 processor, a 6.7" 120Hz OLED display, and an
                AI-powered camera system for professional photos and videos.
                Smooth experience with Android 14 and guaranteed updates for 7 years.
            </div>
            <div class="product-detail-actions">
                <button class="buy-button">Comprar Ahora</button>
            </div>
        </div>
    </div>
@endsection
