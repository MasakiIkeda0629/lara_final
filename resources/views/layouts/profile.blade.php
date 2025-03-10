<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IM</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body class="container">
    <div class="">
        <p class="title">IM</p>
    </div>
    <!-- profile-->
    <header class="header">
        <div class="">
            <!-- Masthead Heading-->
            <h1 class="">池田真颯</h1>
            <!-- Masthead Subheading-->
            <p class="">Students - Web Designer</p>
        </div>
    </header>
    <!-- About Section-->
    <section class="section">
        <div class="section">
            <!-- About Section Heading-->
            <h2 class="introduce">自己紹介</h2>
            <!-- About Section Content-->
            <div class="">
                <div class="detail">
                    <p class="">私は池田真颯です。関西大学の経済学部に在籍しており、日々学校に行っております。普段はにぎり長次郎でバイトしており、学生生活を楽しんでいます。</p>
                </div>
                <div class="greet">
                    <p class="">私はいただいた仕事に真摯に向き合い、要望通りなものを作成します。ぜひ私にお任せください。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section-->
    <section class="section">
        <div class="text-center">
            <!-- Contact Section Heading-->
            <h2 class="contact_me">Contact Me</h2>
            <!-- Contact Section Form-->
            <div class="">
                <div class="">
                    <form action="{{ route('index')}}" method="POST">
                        @csrf
                        <!-- Name input-->
                        <div>
                            <label for="name" class="name">お名前</label><br>
                            <input class="contact_name" name="name" type="text" maxlength="15" placeholder="山田 太郎" value="{{ old('name') }}" required/>
                            <!-- @if($errors->has('name'))
                            <p>{{ $errors->first('name') }}</p>
                            @endif -->
                        </div>
                        <!-- Email address input-->
                        <div>
                            <label for="email" class="email">メールアドレス</label><br>
                            <input class="contact_email" name="email" type="email" placeholder="name@example.com" value="{{ old('email') }}" required/>
                            <!-- @if($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                            @endif -->
                        </div>
                        <!-- Phone number input-->
                        <div>
                            <label for="phone" class="phone">電話番号(ハイフンなし)</label><br>
                            <input class="contact_number" name="phone" type="tel" placeholder="01234567890" value="{{ old('phone') }}" required/>
                            <!-- @if($errors->has('phone'))
                            <p class="error_messeage">{{ $errors->first('phone') }}</p>
                            @endif -->
                        </div>
                        <!-- Message input-->
                        <div>
                            <label for="message" class="message">お問い合わせ内容</label><br>
                            <textarea class="contact_message" name="body" type="text" placeholder="問い合わせ内容をご入力ください" required>{{ old('body') }}</textarea>
                            <!-- @if($errors->has('body'))
                            <p class="error_messeage">{{ $errors->first('body') }}</p>
                            @endif -->
                        </div>
                        <!-- Submit success message-->
                        <!-- This is what your users will see when the form-->
                        <!-- Submit error message-->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="send_btn" type="submit">確認画面へ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        大阪府吹田市原町2-54-16-108
                        <br />
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <!-- <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"></h4>
                        <a class="btn" href="https://www.instagram.com/instagram/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn" href="https://x.com/"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn" href="https://www.line.me/ja/"><i class="fab fa-fw fa-line"></i></a>
                        <a class="btn" href="https://www.facebook.com"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </div> -->
                <div class="">
                    <h4 class=""></h4>
                    創業年月日 2025/01/12
                </div>

            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copy_right">
        <div class="container"><small>Copyright &copy; 2025</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solutioncontact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>