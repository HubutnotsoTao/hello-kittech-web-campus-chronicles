@extends('layouts.app')
@section('content')
<a class="back-link" href="{{ route('institutes') }}">← Back to Institutes</a>
<div class="institute-hero">
    <div class="institute-icon big red">▤</div>
    <div><span class="pill">{{ $institute['code'] }}</span><h2>{{ $institute['name'] }}</h2><p>{{ $institute['description'] }}</p></div>
</div>
<div class="stats-grid"><div><strong>6</strong><small>Programs</small></div><div><strong>2</strong><small>Events</small></div><div><strong>12</strong><small>Stories</small></div></div>
<div class="resource-list">
    <div><span>▤</span><strong>Program Catalog</strong><small>View programs, tracks and course requirements</small></div>
    <div><span>▣</span><strong>Institute Events</strong><small>Workshops, seminars and activities</small></div>
</div>
@endsection
