@extends('layouts.app')

@section('css')
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f5f6fa;
            padding: 40px 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .product-image {
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .product-image img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            z-index: 2;
        }

        .product-info {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .product-category {
            background: #667eea;
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
            width: fit-content;
            text-transform: uppercase;
        }

        .product-brand {
            color: #7f8c8d;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-name {
            font-size: 2rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .product-price {
            font-size: 2.5rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 25px;
        }

        .product-description {
            color: #34495e;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .buy-button {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            align-self: flex-start;
        }

        .buy-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        @media (max-width: 768px) {
            .product-layout {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 300px;
            }

            .product-info {
                padding: 30px;
            }

            .product-name {
                font-size: 1.6rem;
            }

            .product-price {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px 10px;
            }

            .product-info {
                padding: 25px;
            }

            .product-name {
                font-size: 1.4rem;
            }

            .product-price {
                font-size: 1.8rem;
            }

            .buy-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="product-card">
            <div class="product-layout">
                <div class="product-image">
                    <img src="https://i.blogs.es/1cc524/img_1796/375_375.jpeg" alt="Google Pixel 8 Pro">
                </div>

                <div class="product-info">
                    <div class="product-category">Electronics</div>
                    <div class="product-brand">Google</div>
                    <h1 class="product-name">Pixel 8 Pro 256GB</h1>
                    <div class="product-price">$999.99</div>
                    <p class="product-description">
                        Google's flagship smartphone with a Tensor G3 processor, a 6.7" 120Hz OLED display, and an
                        AI-powered camera system for professional photos and videos.
                        Smooth experience with Android 14 and guaranteed updates for 7 years.
                    </p>
                    <button class="buy-button">Comprar Ahora</button>
                </div>
            </div>
        </div>
    </div>
@endsection

