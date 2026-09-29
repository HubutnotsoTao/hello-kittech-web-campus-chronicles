@extends('layouts.app')
@section('content')
<div class="profile-card">
    <div class="profile-avatar">JD</div><h2>Juan Dela Cruz</h2><p class="muted">Student · Computing Science</p>
    <div class="profile-actions"><a class="btn primary" href="{{ route('settings') }}">Edit Profile</a><button class="btn ghost" onclick="demoNotice()">Share Profile</button></div>
</div>
<div class="two-col">
    <div class="panel"><h3>My Chronicle</h3><p class="muted">Your saved stories, posts and campus activity will appear here.</p></div>
    <div class="panel"><h3>Achievements</h3><p class="muted">No achievements added yet.</p></div>
</div>
@endsection
