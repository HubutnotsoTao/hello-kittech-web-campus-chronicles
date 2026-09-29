@extends('layouts.auth')
@section('content')
<div class="auth-heading">Welcome back</div>
<p class="muted center">Sign in to continue to your campus community.</p>

<form onsubmit="demoLogin(event)">
    <label>Email Address</label>
    <div class="input-wrap"><span>✉</span><input type="email" placeholder="name@company.com" required></div>
    <label>Password</label>
    <div class="input-wrap"><span>▣</span><input id="loginPassword" type="password" placeholder="••••••••" required><button type="button" class="eye" onclick="togglePassword('loginPassword')">◉</button></div>
    <a class="forgot" href="{{ route('forgot') }}">Forgot password?</a>
    <button class="btn primary full" type="submit">Sign In</button>
</form>

<div class="or"><span>OR</span></div>
<div class="social-row">
    <button class="btn white full" onclick="demoNotice()">ⓧ &nbsp; Continue with Google</button>
    <button class="btn white full" onclick="demoNotice()">♡ &nbsp; Continue with Apple</button>
</div>

<p class="auth-bottom">Don't have an account? <a href="{{ route('signup') }}">Sign up</a></p>
@endsection
