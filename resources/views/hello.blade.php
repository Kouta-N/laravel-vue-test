<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Document</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<h1>Hello</h1>
<p>{{ $msg }}</p>

<div id="app">
    <my-component></my-component>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
