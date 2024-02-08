@extends('layouts.app')


@section('content')
    <section class="container center">
        <div class="login">
            <h3>User login</h3>
            <form action="" class="login-form">
                <div class="column mb25">
                    <label for="">
                        Email
                    </label>
                    <input type="email">
                </div>

                <div class="column mb25">
                    <label for="">
                        Password
                    </label>
                    <input type="password">
                </div>
                <div class="mb25">
                    <input type="checkbox">
                    <label for="">
                        Remember me
                    </label>
                </div>
                <div class="column center mb25">
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

        .column {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        .mb25 {
            margin-bottom: 25px;
        }
    </style>

@endPushOnce
