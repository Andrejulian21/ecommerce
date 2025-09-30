@extends('layouts.app')

@section('css')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            color: white;
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .product-image {
            width: 100%;
            height: 250px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-info {
            padding: 25px;
        }

        .product-brand {
            color: #667eea;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .product-name {
            font-size: 1.4rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .product-description {
            color: #7f8c8d;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
            height: 60px;
            overflow: hidden;
        }

        .product-price {
            font-size: 2rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .add-to-cart {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .add-to-cart:hover {
            background: linear-gradient(45deg, #5a6fd8, #6a42a0);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="header">
            <h1>Our Products</h1>
            <p>Discover the best selection with guaranteed quality</p>
        </div>

        <div class="products-grid">
            <!-- Samsung -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaJYX13zaTQ0oZZEt9Kvvu72gYglEki3NQeQ&s"
                        alt="Galaxy S24 Ultra">
                </div>
                <div class="product-info">
                    <div class="product-category">Electronics</div>
                    <div class="product-brand">Samsung</div>
                    <h3 class="product-name">Galaxy S24 Ultra 256GB</h3>
                    <p class="product-description">Premium smartphone with 200MP camera, 6.8" Dynamic AMOLED 2X display,
                        and integrated S Pen. Powered by Snapdragon 8 Gen 3 for top performance.</p>
                    <div class="product-price">$1,299.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <!-- Google Pixel -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.blogs.es/1cc524/img_1796/375_375.jpeg" alt="Google Pixel 8 Pro">
                </div>
                <div class="product-info">
                    <div class="product-category">Electronics</div>
                    <div class="product-brand">Google</div>
                    <h3 class="product-name">Pixel 8 Pro 256GB</h3>
                    <p class="product-description">Flagship smartphone with Tensor G3 chip, 6.7" OLED display, advanced
                        AI camera system, and smooth Android 14 experience.</p>
                    <div class="product-price">$999.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <!-- MacBook -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-silver-select-202310?wid=940&hei=1112&fmt=png-alpha&.v=1697037914549"
                        alt="MacBook Pro M3">
                </div>
                <div class="product-info">
                    <div class="product-category">Computers</div>
                    <div class="product-brand">Apple</div>
                    <h3 class="product-name">MacBook Pro 14" M3</h3>
                    <p class="product-description">Professional laptop with M3 chip, 14.2" Liquid Retina XDR display,
                        16GB RAM and 512GB SSD. Perfect for creative work and productivity.</p>
                    <div class="product-price">$2,199.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <!-- Sony -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://m.media-amazon.com/images/I/71o8Q5XJS5L._AC_SL1500_.jpg" alt="Sony WH-1000XM5">
                </div>
                <div class="product-info">
                    <div class="product-category">Audio</div>
                    <div class="product-brand">Sony</div>
                    <h3 class="product-name">WH-1000XM5 Wireless</h3>
                    <p class="product-description">Wireless headphones with industry-leading noise cancellation. 30
                        hours of battery life and exceptional sound quality for audiophiles.</p>
                    <div class="product-price">$399.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <!-- iPad -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9zKhEqfGfvZ_rHG6OR1mbILkURGFAAAd_1A&s"
                        alt="iPad Pro 12.9">
                </div>
                <div class="product-info">
                    <div class="product-category">Tablets</div>
                    <div class="product-brand">Apple</div>
                    <h3 class="product-name">iPad Pro 12.9" M2</h3>
                    <p class="product-description">Powerful tablet with M2 chip, Liquid Retina XDR display, Apple Pencil
                        2 support, and all-day battery life. Ideal for work and entertainment.</p>
                    <div class="product-price">$1,099.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <!-- LG TV -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSOl3zlbYgni6dOKVpHdZdk1EJWjLx0uLyJw&s"
                        alt="LG OLED TV">
                </div>
                <div class="product-info">
                    <div class="product-category">Televisions</div>
                    <div class="product-brand">LG</div>
                    <h3 class="product-name">LG OLED evo 65"</h3>
                    <p class="product-description">Next-gen OLED evo 4K Smart TV with self-lit pixels, Dolby Vision,
                        Dolby Atmos, and AI processor for stunning picture and sound.</p>
                    <div class="product-price">$2,499.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

@endsection

