@extends('layouts.auth')
@section('content')
<div class="auth-heading">Create your account</div>
<p class="muted center">Join the CampusChronicle community.</p>

<form onsubmit="demoSignup(event)">
    <label>Full Name</label>
    <div class="input-wrap"><span>♙</span><input type="text" placeholder="Sarah Jenkins" required></div>
    <label>Email Address</label>
    <div class="input-wrap"><span>✉</span><input type="email" placeholder="name@company.com" required></div>
    <label>Password</label>
    <div class="input-wrap"><span>▣</span><input id="signupPassword" type="password" placeholder="Minimum 8 characters" minlength="8" required><button type="button" class="eye" onclick="togglePassword('signupPassword')">◉</button></div>
    <label>Confirm Password</label>
    <div class="input-wrap"><span>▣</span><input id="confirmPassword" type="password" placeholder="Repeat your password" minlength="8" required></div>
    <label class="check"><input type="checkbox" required> <span>I agree to the <b>Terms of Service</b> and <b>Privacy Policy</b>.</span></label>
    <button class="btn primary full" type="submit">Create Account</button>
</form>

<div class="or"><span>OR</span></div>
<div class="social-row">
    <button class="btn white full" onclick="demoNotice()">ⓧ &nbsp; Continue with Google</button>
    <button class="btn white full" onclick="demoNotice()">♡ &nbsp; Continue with Apple</button>
</div>
<p class="auth-bottom">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
@endsection
