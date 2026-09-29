@extends('layouts.app')
@section('content')
<div class="page-intro"><div><span class="eyebrow">What's happening on campus</span><h2>Events</h2><p class="muted">Discover campus activities and student organization events.</p></div><button class="btn primary" onclick="demoNotice()">＋ Add Event</button></div>
<div class="search"><span>⌕</span><input placeholder="Search events..."></div>
<div class="card-grid large">
    <article class="event-card"><div class="fake-photo photo-one"></div><div class="card-body"><span class="tag red-tag">COLLEGE</span><h3>College Foundation Day 2026</h3><p>Feb 18, 2026 · 9:00 AM</p><small>University Gymnasium</small></div></article>
    <article class="event-card"><div class="fake-photo photo-two"></div><div class="card-body"><span class="tag blue-tag">TECH</span><h3>IT Week 2026</h3><p>Mar 12, 2026 · 9:00 AM</p><small>Exhibition Hall & Lab 3</small></div></article>
    <article class="event-card"><div class="fake-photo photo-three"></div><div class="card-body"><span class="tag gold-tag">JPIA</span><h3>Accounting Leadership Forum</h3><p>Apr 08, 2026 · 1:00 PM</p><small>Business Auditorium</small></div></article>
</div>
@endsection
