@extends('layouts.app')
@section('content')
<div class="page-intro"><div><span class="eyebrow">Personalize your experience</span><h2>Settings</h2></div></div>
<div class="settings-card">
    <div class="setting-row"><div><strong>Dark Mode</strong><small>Switch between the original dark theme and light mode.</small></div><button class="switch" id="themeSwitch" onclick="toggleTheme(); updateSwitch()"><span></span></button></div>
    <div class="setting-row"><div><strong>Notifications</strong><small>Demo notification preferences.</small></div><button class="switch on" onclick="this.classList.toggle('on')"><span></span></button></div>
    <div class="setting-row"><div><strong>Account</strong><small>Edit your profile information.</small></div><a href="{{ route('profile') }}" class="btn ghost">My Profile</a></div>
</div>
@endsection
