<head>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('/css/complete.css') }}">
</head>


<body class="container">
    <section>
        @csrf
        <h1 class="comp">
            お問い合わせ完了
        </h1>

        <div>
            <button class="btn"><a href="/">Home</a></button>
        </div>
    </section>
</body>