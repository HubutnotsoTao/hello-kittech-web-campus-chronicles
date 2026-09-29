@extends('layouts.app')
@section('content')
<div class="page-intro"><div><span class="eyebrow">Share with your community</span><h2>Create Post</h2></div></div>
<div class="form-card">
    <label>Select Category</label>
    <select><option>News</option><option>Events</option><option>Stories</option><option>JPIA</option></select>
    <label>Title</label><input placeholder="Give your post a catchy title">
    <label>Content</label><textarea rows="8" placeholder="Write down your news, event details, story or announcement..."></textarea>
    <div class="upload-box" onclick="demoNotice()">＋ <span>Add cover image</span></div>
    <button class="btn primary" onclick="demoNotice()">Publish Post</button>
</div>
@endsection
