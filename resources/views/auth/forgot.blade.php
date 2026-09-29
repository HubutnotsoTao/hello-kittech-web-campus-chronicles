@extends('layouts.auth')
@section('content')
<a class="back-link" href="{{ route('login') }}">← Back to Log In</a>
<div class="key-icon">⚿</div>
<div class="auth-heading">Reset password</div>
<p class="muted center">Enter your registered email below and we'll show a demo reset confirmation.</p>
<form onsubmit="demoForgot(event)">
    <label>Email Address</label>
    <div class="input-wrap"><span>✉</span><input type="email" placeholder="name@company.com" required></div>
    <button class="btn primary full" type="submit">Send Code</button>
</form>
<p class="support">Contact <a href="#" onclick="demoNotice()">Customer Support</a> if you are having issues recovering your account.</p>
@endsection
