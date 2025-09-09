<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
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

        .product-image::before {
            content: '';
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 15px;
            opacity: 0.2;
        }

        .product-image::after {
            content: '📱';
            position: absolute;
            font-size: 4rem;
            opacity: 0.6;
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
</head>
<body>
    <div class="container">
        <div class="product-card">
            <div class="product-layout">
                <div class="product-image"></div>

                <div class="product-info">
                    <div class="product-category">Electronics</div>
                    <div class="product-brand">Samsung</div>
                    <h1 class="product-name">Galaxy S24 Ultra 256GB</h1>
                    <div class="product-price">$1,299.99</div>
                    <p class="product-description">
                        Smartphone premium con cámara de 200MP, pantalla Dynamic AMOLED 2X de 6.8" y S Pen integrado.
                        Procesador Snapdragon 8 Gen 3 para máximo rendimiento en gaming, fotografía profesional y productividad.
                    </p>
                    <button class="buy-button">Comprar Ahora</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
