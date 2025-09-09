<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Tienda Online</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
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
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-image::before {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            opacity: 0.1;
        }

        .product-image::after {
            content: '📦';
            font-size: 4rem;
            opacity: 0.4;
            z-index: 1;
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

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 20px;
            }

            .product-info {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 2rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            body {
                padding: 20px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nuestros Productos</h1>
            <p>Descubre la mejor selección con calidad garantizada</p>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Electronics</div>
                    <div class="product-brand">Samsung</div>
                    <h3 class="product-name">Galaxy S24 Ultra 256GB</h3>
                    <p class="product-description">Smartphone premium con cámara de 200MP, pantalla Dynamic AMOLED 2X de 6.8" y S Pen integrado. Procesador Snapdragon 8 Gen 3 para máximo rendimiento.</p>
                    <div class="product-price">$1,299.99</div>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Sports & Footwear</div>
                    <div class="product-brand">Nike</div>
                    <h3 class="product-name">Air Max 270 React</h3>
                    <p class="product-description">Zapatillas deportivas con tecnología Air Max para máxima comodidad. Diseño moderno y materiales de alta calidad para uso diario y deportivo.</p>
                    <div class="product-price">$159.99</div>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Computers</div>
                    <div class="product-brand">Apple</div>
                    <h3 class="product-name">MacBook Pro 14" M3</h3>
                    <p class="product-description">Laptop profesional con chip M3, pantalla Liquid Retina XDR de 14.2", 16GB RAM y 512GB SSD. Perfecta para trabajo creativo y productividad.</p>
                    <div class="product-price">$2,199.99</div>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Audio</div>
                    <div class="product-brand">Sony</div>
                    <h3 class="product-name">WH-1000XM5 Wireless</h3>
                    <p class="product-description">Audífonos inalámbricos con cancelación de ruido líder en la industria. 30 horas de batería y calidad de sonido excepcional para audiófilos.</p>
                    <div class="product-price">$399.99</div>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Home Appliances</div>
                    <div class="product-brand">Dyson</div>
                    <h3 class="product-name">V15 Detect Absolute</h3>
                    <p class="product-description">Aspiradora inalámbrica con tecnología de detección láser. Potente motor digital y filtración avanzada para limpieza profunda del hogar.</p>
                    <div class="product-price">$749.99</div>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"></div>
                <div class="product-info">
                    <div class="product-category">Fashion</div>
                    <div class="product-brand">Levi's</div>
                    <h3 class="product-name">501 Original Jeans</h3>
                    <p class="product-description">Jeans clásicos de mezclilla 100% algodón con corte recto. Diseño atemporal y durabilidad legendaria que nunca pasa de moda.</p>
                    <div class="product-price">$89.99</div>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
