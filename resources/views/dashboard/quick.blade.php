@extends('layouts.app')
@section('content')
<div class="page-intro"><div><span class="eyebrow">Shortcuts</span><h2>Quick Access</h2><p class="muted">Jump to common campus resources.</p></div></div>
<div class="quick-grid">
    <a href="{{ route('events') }}" class="quick-card"><span>▣</span><strong>News & Events</strong><small>Campus announcements and activities</small></a>
    <a href="{{ route('story') }}" class="quick-card"><span>◉</span><strong>Stories</strong><small>Student voices and narratives</small></a>
    <a href="{{ route('institutes') }}" class="quick-card"><span>▤</span><strong>Institutes</strong><small>Explore campus departments</small></a>
    <a href="{{ route('posts.create') }}" class="quick-card"><span>＋</span><strong>Create Post</strong><small>Share an announcement</small></a>
</div>
@endsection
