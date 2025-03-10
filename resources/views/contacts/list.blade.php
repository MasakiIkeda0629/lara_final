<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ一覧</title>
    <link rel="stylesheet" href="{{ asset('/css/list.css') }}">
</head>

<body>
    <div class="container">
        <h1>お問い合わせ一覧</h1>

        @if($contacts->isEmpty())
        <p>お問い合わせなし。</p>
        @else

        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>電話番号</th>
                    <th>お問い合わせ内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->body }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</body>

</html>