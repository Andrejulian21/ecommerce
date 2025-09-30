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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .center-form-container {
            min-height: 80vh;
            /* Ajusta según el tamaño del navbar/footer */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-header p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            color: #2c3e50;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-input,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e0e6ed;
            border-radius: 12px;
            font-size: 1rem;
            font-family: inherit;
            background: white;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus,
        .form-textarea:focus,
        .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
            line-height: 1.6;
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: #bdc3c7;
            font-style: italic;
        }

        .file-input-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-input {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px 20px;
            border: 2px dashed #e0e6ed;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
            text-align: center;
            font-size: 1rem;
            color: #7f8c8d;
        }

        .file-input-label:hover {
            border-color: #667eea;
            background: rgba(102, 126, 234, 0.05);
            color: #667eea;
        }

        .file-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .price-input-container {
            position: relative;
        }

        .price-symbol {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #27ae60;
            font-weight: bold;
            font-size: 1.2rem;
            z-index: 1;
        }

        .price-input {
            padding-left: 50px;
        }

        .form-buttons {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        .btn {
            flex: 1;
            padding: 18px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #5a6fd8, #6a42a0);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: #ecf0f1;
            color: #7f8c8d;
            border: 2px solid #bdc3c7;
        }

        .btn-secondary:hover {
            background: #d5dbdb;
            color: #2c3e50;
            border-color: #95a5a6;
            transform: translateY(-2px);
        }

        .required {
            color: #e74c3c;
            margin-left: 3px;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px 15px;
            }

            .form-container {
                padding: 30px 25px;
            }

            .form-header h1 {
                font-size: 2rem;
            }

            .form-buttons {
                flex-direction: column;
            }

            .btn {
                padding: 15px 25px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 25px 20px;
            }

            .form-header h1 {
                font-size: 1.8rem;
            }

            .form-input,
            .form-textarea,
            .form-select {
                padding: 12px 15px;
            }

            .price-input {
                padding-left: 40px;
            }

            .price-symbol {
                left: 15px;
            }
        }
    </style>
@endsection

@section('content')
    <div class='center-form-container'>
        <div class="form-container">
            <div class="form-header">
                <h1>Add New Product</h1>
                <p>Fill in the details to add a new product to your store</p>
            </div>

            <form class="product-form">
                <div class="form-group">
                    <label class="form-label" for="productName">
                        Product Name<span class="required">*</span>
                    </label>
                    <input type="text" id="productName" name="productName" class="form-input"
                        placeholder="Enter product name..." required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="productBrand">
                        Brand<span class="required">*</span>
                    </label>
                    <input type="text" id="productBrand" name="productBrand" class="form-input"
                        placeholder="Enter brand name..." required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="productPrice">
                        Price<span class="required">*</span>
                    </label>
                    <div class="price-input-container">
                        <span class="price-symbol">$</span>
                        <input type="number" id="productPrice" name="productPrice" class="form-input price-input"
                            placeholder="0.00" step="0.01" min="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="productCategory">
                        Category<span class="required">*</span>
                    </label>
                    <div class="category-input-container">
                        <input type="number" id="productCategory" name="productCategory" class="form-input Category-input"
                            placeholder="Enter product category" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="productDescription">
                        Description<span class="required">*</span>
                    </label>
                    <textarea id="productDescription" name="productDescription" class="form-textarea"
                        placeholder="Enter detailed product description..." required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="productImage">
                        Product Image<span class="required">*</span>
                    </label>
                    <input type="text" id="productImage" name="productImage" class="form-input"
                        placeholder="Enter product image url" required>
                </div>

                <div class="form-buttons">
                    <button type="submit" class="btn btn-primary">
                        Add Product
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        Clear Form
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
