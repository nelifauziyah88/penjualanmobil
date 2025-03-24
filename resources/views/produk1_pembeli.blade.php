<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/btc.png') }}" type="image/x-icon">
    <title>PUBG MOBILE Top Up</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #283593;
        }

        .header-image {
            height: 300px;
            object-fit: cover;
            width: 100%;
        }

        .game-logo {
            width: 130px;
            height: 180px;
            margin-top: -90px;
            margin-left: -20px;
            border-radius: 8px;
        }

        .main-content {
            background-color: #283593;
            border-radius: 8px;
        }

        .product-card {
            background-color: rgba(217, 217, 217, 0.3);
            transition: all 0.3s;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 90px;
            width: 190px;
            font-size: 18px;
        }

        .product-card:hover {
            background-color: #283593;
            cursor: pointer;
            color: white;
        }

        .product-card img {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .user-id-input {
            background-color: rgba(217, 217, 217, 0.3);
            border-radius: 50px;
            color: white;
            border: none;
        }

        .confirm-button {
            background-color: #5B8FF5;
            color: white;
            border: none;
            width: 280px;
            height: 40px;
            border-radius: 50px;
        }

        .payment-method {
            text-align: center;
            margin-top: 20px;
        }

        /* Batasi ukuran gambar QR Code */
        .payment-method img {
            max-width: 120px;
            /* Ukuran maksimal */
            height: auto;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #5C6BC0;
            color: white;
        }
    </style>
</head>

<body>
    <div class="position-relative">
        <img src="{{ asset('images/pubg_banner.jpg') }}" alt="PUBG Banner" class="header-image">
    </div>

    <div class="container position-relative">
        <div class="d-flex align-items-end mb-4">
            <img src="{{ asset('images/pubg.jpg') }}" alt="PUBG Mobile Logo" class="game-logo">
            <div class="text-white ms-3 mb-4">
                <h1 class="fs-2 fw-bold mb-0">PUBG MOBILE</h1>
                <p class="fs-5 mb-2">TENCENT GAMES</p>
            </div>
        </div>

        <div class="main-content text-white p-4 mb-4">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="fw-bold fs-5 mb-2">Reminder</h2>
                    <ol class="fs-5 mb-2">
                        <li>Make sure the ID you entered is correct.</li>
                        <li>Then select the product you want to purchase.</li>
                        <li>Ensure it matches your preferences.</li>
                        <li>Confirm your purchase.</li>
                    </ol>
                </div>
                <div class="col-md-9">
                    <h3 class="fw-bold fs-5 mb-3">Enter Your Account Data</h3>
                    <input type="text" class="form-control user-id-input" placeholder="User ID">

                    <h3 class="fw-bold fs-5 mb-3 mt-4">Choose Product</h3>
                    <div class="row">
                        @foreach([
                        ['185 UC', '41.000'],
                        ['329 UC', '69.000'],
                        ['660 UC', '138.000'],
                        ['985 UC', '198.000'],
                        ['1320 UC', '265.000'],
                        ['1800 UC', '331.000'],
                        ['2120 UC', '392.000'],
                        ['2460 UC', '459.000'],
                        ['2785 UC', '519.000'],
                        ['3120 UC', '575.000'],
                        ['3850 UC', '670.000'],
                        ['4175 UC', '725.000']
                        ] as $product)
                        <div class="col-md-4">
                            <div class="product-card p-3 rounded">
                                <div class="fw-bold">{{ $product[0] }}</div>
                                <div class="text-white-help">Rp. {{ $product[1] }}</div>
                                <img src="{{ asset('images/uc.png') }}" alt="UC Icon">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <h3 class="fw-bold fs-5 mb-3 mt-4">Payment Methods</h3>
                    <img src="{{ asset('images/qr_code.png') }}" alt="QR Code">
                    <button class="confirm-button mt-3">Top Up Confirmation</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2025 BTC Top Up Game Store. All Right Reserved.</p>
    </footer>
</body>

</html>