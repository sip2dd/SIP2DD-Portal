<!DOCTYPE html>
<html lang="en">

<head>
    <meta charshet="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/dialog-error-icon.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style_error.css') }}">
    <title>error 500</title>
</head>

<body>
    <div class="error-page">
        <h2>Oops! Internal Server Error</h2>
        <h1>500</h1>
        <p>Kami tidak dapat menemukan apa yang anda cari.</p>
        <a href="{!!  url('/') !!}">Kembali</a>
    </div>
</body>

</html>
