@extends('public.layout')

@section('content')
<div class="front-bg">
    <img src="{{Config::get('application.url')}}/img/logo-sommite.png" class="front-image">
</div>

<div class="row push-top">
    <div class="span6">
        <div class="front-welcome-text" id="front-welcome-text">
            <h1>ZEP BV Platform.</h1>
            
        </div>
    </div>
    <div class="span6">
       <!--  @if ( !empty( $msg ) )
        <div class="alert alert-error">
            {{ $msg }}
        </div>
        @endif -->
        <form class="well form-inline" method="post"  action="{{ action('UserController@postLogin') }}">
            <fieldset>
                <legend>
                    System login
                </legend>
                <input type="text" class="input-small" name="email" placeholder="Email" id="email" />
                <input type="password" class="input-small" name="password" placeholder="Password" />

                <button type="submit" class="btn">
                    Sign in
                </button>
               {{ Form::token()}}

               

            </fieldset>
        </form>
    </div>
</div>

@endsection