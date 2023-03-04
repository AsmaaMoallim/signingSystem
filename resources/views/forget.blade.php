@extends('layout')

@section('content')
<form class="form">
    <div class="form__field">
        <i class="form__icon fas fa-user"></i>
        <input type="text" class="form__input" placeholder="User name / Email">
    </div>
    <button class="button form__submit">
        <span class="button__text">send code</span>
        <i class="button__icon fas fa-chevron-right"></i>
    </button>
</form>
@stop