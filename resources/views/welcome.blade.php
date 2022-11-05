<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lar</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="antialiased">
    <div>
        <button onclick="location.href='{{ route('index') }}'">テーブル作成！</button>
        <br>
        <br>
        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>名前</th>
                    <th>年齢</th>
                    <th>職業</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($data))
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->job }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</body>

</html>
