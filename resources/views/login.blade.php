@extends('layout')

@section('content')
<form class="form">
    <div class="form__field">
        <i class="form__icon fas fa-user"></i>
        <input type="text" class="form__input" placeholder="User name / Email">
    </div>
    <div class="form__field">
        <i class="form__icon fas fa-lock"></i>
        <input type="password" class="form__input" placeholder="Password">
    </div>
    <div class="remember__field">
        <input type="checkbox" value="lsRememberMe" id="rememberMe">
        <label for="rememberMe">Remember me</label>
    </div>
    <div class="forget__field">
        <a href="#">Forgot password?</a><br>
    </div>
    <button class="button form__submit">
        <span class="button__text">Log In Now</span>
        <i class="button__icon fas fa-chevron-right"></i>
    </button>
</form>
@stop