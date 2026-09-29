<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'CampusChronicle' }}</title>
    <link rel="stylesheet" href="{{ asset('css/campus.css') }}">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand-mark">CC</div>
            <div>
                <strong>CampusChronicle</strong>
                <span>Your campus, your voice</span>
            </div>
        </div>

        <nav class="nav">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">⌂ <span>Home</span></a>
            <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">▣ <span>Events</span></a>
            <a href="{{ route('story') }}" class="{{ request()->routeIs('story') ? 'active' : '' }}">◉ <span>Stories</span></a>
            <a href="{{ route('quick') }}" class="{{ request()->routeIs('quick') ? 'active' : '' }}">✦ <span>Quick Access</span></a>
            <a href="{{ route('institutes') }}" class="{{ request()->routeIs('institutes') ? 'active' : '' }}">▤ <span>Institutes</span></a>
            <a href="{{ route('posts.create') }}" class="{{ request()->routeIs('posts.create') ? 'active' : '' }}">＋ <span>Create Post</span></a>
        </nav>

        <div class="sidebar-bottom">
            <a href="{{ route('profile') }}">◌ <span>My Chronicle</span></a>
            <a href="{{ route('settings') }}">⚙ <span>Settings</span></a>
            <a href="{{ route('login') }}" class="logout">↪ <span>Log Out</span></a>
        </div>
    </aside>

    <main class="main">
        <header class="topbar">
            <button class="icon-btn mobile-menu" onclick="toggleSidebar()">☰</button>
            <div>
                <div class="eyebrow">Campus community</div>
                <h1>{{ $heading ?? 'CampusChronicle' }}</h1>
            </div>
            <div class="top-actions">
                <button class="icon-btn" onclick="toggleTheme()" title="Toggle theme">☾</button>
                <a class="avatar" href="{{ route('profile') }}">JD</a>
            </div>
        </header>

        <section class="content">
            @yield('content')
        </section>
    </main>
</div>
<script src="{{ asset('js/campus.js') }}"></script>
</body>
</html>
