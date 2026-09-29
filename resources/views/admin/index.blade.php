@extends('layouts.app')
@section('content')
<div class="page-intro"><div><span class="eyebrow">Control campus publications</span><h2>Admin Moderation</h2></div></div>
<div class="notice-card"><strong>Pending Posts (3)</strong><span>Review community submissions before publishing.</span></div>
<div class="moderation-list">
    <div class="moderation-item"><span class="cat-icon red">▤</span><div><strong>Adri Hipolito</strong><p>Petition for more campus charging stations</p></div><button class="tag red-tag" onclick="demoNotice()">Review</button></div>
    <div class="moderation-item"><span class="cat-icon blue">▤</span><div><strong>Dr. Reyna O'Connor</strong><p>Research paper publication announcement</p></div><button class="tag blue-tag" onclick="demoNotice()">Review</button></div>
    <div class="moderation-item"><span class="cat-icon gold">▤</span><div><strong>JPIA Council</strong><p>Student accounting leadership program</p></div><button class="tag gold-tag" onclick="demoNotice()">Review</button></div>
</div>
@endsection
