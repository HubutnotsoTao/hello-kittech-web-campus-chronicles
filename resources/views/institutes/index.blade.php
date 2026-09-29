@extends('layouts.app')
@section('content')
<div class="page-intro"><div><span class="eyebrow">Explore campus departments</span><h2>Institutes</h2><p class="muted">Browse academic departments and student communities.</p></div></div>
<div class="institute-list">
@php
$items = [
 ['Institute of Computing Science','ICS','blue','ics'],
 ['Institute of Business Education','IBE','red','ibe'],
 ['Institute of Arts and Science','IAS','green','ias'],
 ['Institute of Teacher Education','ITE','gold','ite'],
 ['Institute of Hospitality and Tourism Management','IHTM','purple','ihtm'],
 ['Junior Philippine Institute of Accountants','JPIA','red','jpia'],
];
@endphp
@foreach($items as $item)
<a href="{{ url('/institutes/'.$item[3]) }}" class="institute-row">
    <span class="institute-icon {{ $item[2] }}">▤</span>
    <div><strong>{{ $item[0] }}</strong><small>{{ $item[1] }}</small></div>
    <span>›</span>
</a>
@endforeach
</div>
@endsection
