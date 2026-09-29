@extends('layouts.app')
@section('content')
<div class="hero">
    <div>
        <span class="pill">CAMPUS COMMUNITY</span>
        <h2>Good day, Juan! 👋</h2>
        <p>Stay updated with the latest events, stories and opportunities happening around campus today.</p>
    </div>
    <a href="{{ route('posts.create') }}" class="btn primary">＋ Create Post</a>
</div>

<div class="section-title"><h2>Explore Categories</h2><a href="{{ route('quick') }}">View all</a></div>
<div class="category-grid">
    <a href="{{ route('events') }}" class="category-card"><span class="cat-icon red">▣</span><div><strong>News</strong><small>12 new stories</small></div><b>›</b></a>
    <a href="{{ route('events') }}" class="category-card"><span class="cat-icon blue">◫</span><div><strong>Events</strong><small>4 active events</small></div><b>›</b></a>
    <a href="{{ route('story') }}" class="category-card"><span class="cat-icon purple">◉</span><div><strong>Stories</strong><small>Student narratives</small></div><b>›</b></a>
    <a href="{{ route('institutes') }}" class="category-card"><span class="cat-icon gold">♙</span><div><strong>Institutes</strong><small>6 campus groups</small></div><b>›</b></a>
</div>

<div class="section-title"><h2>Upcoming Events</h2><a href="{{ route('events') }}">See all</a></div>
<div class="card-grid">
    <article class="event-card"><div class="fake-photo photo-one"></div><div class="card-body"><span class="tag red-tag">COLLEGE</span><h3>College Foundation Day 2026</h3><p>Feb 18, 2026 · 9:00 AM</p><small>University Gymnasium</small></div></article>
    <article class="event-card"><div class="fake-photo photo-two"></div><div class="card-body"><span class="tag blue-tag">TECH</span><h3>IT Week 2026</h3><p>Mar 12, 2026 · 9:00 AM</p><small>Exhibition Hall & Lab 3</small></div></article>
    <article class="event-card"><div class="fake-photo photo-three"></div><div class="card-body"><span class="tag gold-tag">JPIA</span><h3>Accounting Leadership Forum</h3><p>Apr 08, 2026 · 1:00 PM</p><small>Business Auditorium</small></div></article>
</div>
@endsection
