<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="app.css">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="sm:flex-wrap md:flex-wrap bg-yellow-400 h-full py-1">
    <div class="flex justify-between">
        <div class="m-6">
            <div class="text-white text-2xl">ギアシェア</div>
            <div class="text-white">キャンプギア情報交換SNS</div>
        </div>
        <div class="m-6">
            <div class="text-white text-sm">
                <a href="#">マイページ</a>
            </div>
        </div>
    </div>
    <div class="text-xs text-center text-white">
        お気に入りのキャンプギアが見つかるキャンプギア検索サイト
    </div>
    <div class="flex-1 bg-white px-8 py-2 mt-1 mb-6 mr-6 ml-6 rounded-lg">
        {{ $slot }}
    </div>
</div>

</body>
</html>
