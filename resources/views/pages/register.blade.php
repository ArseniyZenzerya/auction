@extends('layouts.app')


@section('content')
    <section class="container center">
        <div class="login">
            <h3>Create an account</h3>
            <form action="{{route('api.register')}}" method="POST" class="login-form">
                @csrf
                <div class="column">
                    <label for="">Email</label>
                    <input type="email" name="email">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
                <div class="column">
                    <label for="">Password</label>
                    <input type="password" name="password">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
                <div class="column">
                    <label for="">Name</label>
                    <input type="text" name="name">
                    @error('name')
                    {{$message}}
                    @enderror
                </div><div class="column">
                    <label for="">Surname</label>
                    <input type="text" name="surname">
                    @error('surname')
                    {{$message}}
                    @enderror
                </div>
                <div class="column">
                    <label for="">Input password once more</label>
                    <input type="password" name="password_confirmation">
                    @error('passConfirmed')
                    {{$message}}
                    @enderror
                </div>
                <div class="column center">
                    <p>Already have an account?</p>
                    <a href="">Login</a>
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
