@extends('layouts.app')


@section('content')
    <section class="container center">
        <div class="login">
            <h3>User login</h3>
            <form action="{{route('api.login')}}" method="POST" class="login-form" id="create-auction">
                @csrf
                <div class="column">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="column">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="column center">
                    <p>Don’t have account yet?</p>
                    <a href="{{route('register')}}" class="register-link">Register</a>
                </div>
                <input type="submit" value="Login" class="button login-btn">
            </form>
        </div>
    </section>

@endsection


@section('meta')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content=" ">
@endsection


@pushonce('scripts')

@endpushonce

@pushOnce('css')
    <style>
        .login {
            margin-top: 140px;
            width: 300px;
            padding: 16px;
            background: var(--main-color);
            border: solid 1px var(--border-card-color);
            display: flex;
            flex-direction: column;
        }

        .login h3 {
            text-align: center;
            margin-bottom: 25px;
        }

        .center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .login-form > div {
            margin-bottom: 25px;
        }

        .column {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding:  8px 12px;
        }

        .login-btn{
            padding: 6px 15px;
            width: 120px;
        }

        .register-link{
            color: #1890FF;
        }
    </style>

@endPushOnce
