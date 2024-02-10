@extends('layouts.app')


@section('content')
    <section class="container center">
        <div class="login">
            <h3>User login</h3>
            <form action="{{route('api.login')}}" method="POST" class="login-form">
                @csrf
                <div class="column">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="column">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input type="checkbox">
                    <label for="">Remember me</label>
                </div>
                <div class="column center">
                    <p>Don`t have account</p>
                    <a href="">Register</a>
                </div>
                <input type="submit" class="button">
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

    </style>

@endPushOnce
