<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'CampusChronicle' }}</title>
    <link rel="stylesheet" href="{{ asset('css/campus.css') }}">
</head>
<body class="auth-page">
    <div class="auth-wrap">
        <div class="auth-card">
            <div class="auth-logo">CC</div>
            <div class="auth-brand">Campus Chronicle</div>
            @yield('content')
        </div>
    </div>
<script src="{{ asset('js/campus.js') }}"></script>
</body>
</html>
