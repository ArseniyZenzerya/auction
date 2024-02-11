@extends('layouts.app')


@section('content')
    <section class="container center">
        <div class="register">
            <h3>Create an account</h3>
            <form action="{{route('api.register')}}" method="POST" class="register-form">
                @csrf
                <div class="column">
                    <label for="email">Your Email</label>
                    <input type="email" name="email">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
                <div class="column">
                    <label for="username">Your username</label>
                    <input type="text" name="username">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
                <div class="column">
                    <label for="password">Create a password</label>
                    <input type="password" name="password">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
                <div class="column">
                    <label for="password_confirmation">Input password once more</label>
                    <input type="password" name="password_confirmation">
                    @error('passConfirmed')
                    {{$message}}
                    @enderror
                </div>
                <div class="column center">
                    <p>Already have an account?</p>
                    <a href="{{route('login')}}">Login</a>
                </div>
                <input type="submit" value="Register" class="button btn-register">
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
        .register {
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

        .register-form {
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

        .btn-register{
            width: 120px;
        }

        .register-form input{
            padding: 8px 12px;
        }

        .register-form div{
            margin-bottom: 25px;
        }

        .register h3{
            font-size: 20px;
            text-align: center;
            margin-bottom: 25px;
        }

    </style>

@endPushOnce
