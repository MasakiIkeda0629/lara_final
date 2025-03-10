<head>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
</head>

<body class="container">
    <section class="form">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div>
                <strong><label for="name">＊お名前＊</label></strong><br>
                {{ $name }}
                <input type="hidden" name="name" value="{{ $name }}">
            </div>

            <div>
                <strong><label for="email">＊メールアドレス＊</label></strong><br>
                {{ $email }}
                <input type="hidden" name="email" value="{{ $email }}">
            </div>

            <div>
                <strong><label for="phone">＊電話番号＊</label></strong><br>
                {{ $phone }}
                <input type="hidden" name="phone" value="{{ $phone }}">
            </div>

            <div>
                <strong><label for="body">＊お問い合わせ内容＊</label></strong><br>
                {{ $body }}
                <input type="hidden" name="body" value="{{ $body }}">
            </div>

            <div>
                <button class="btn" type="submit" name="submitBtnVal" value="back"><a href="http://localhost/index.php/">戻る</a></button>
                <button class="btn" type="submit" name="submitBtnVal" value="complete">送信</button>
            </div>
        </form>
    </section>
</body>