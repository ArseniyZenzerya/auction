@extends('layouts.app')


@section('content')
    @include('inc.auth.status', ['step'=> 1])

    <section class="container center">
        <div class="center">
            <h3>What do you want to sell?</h3>
            <form action="{{route('createFirstStep')}}" class="first-create" id="create-auction" method="post">
                @csrf
                <div>
                    <label for="title">Title:</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label for="desc">Description:</label>
                    <textarea name="desc" id="" cols="30" rows="4"></textarea>
                </div>
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
        .center {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        h3 {
            font-size: 24px;
            margin-bottom: 25px;
        }

        .first-create {
            display: flex;
            width: 440px;
            flex-direction: column;
        }

        .first-create > div{
            display: flex;
            flex-direction: column;
        }

        .first-create > div > input{
            padding: 8px 12px;
            margin-bottom: 16px;
        }

        label {
            margin-bottom: 8px;
        }


    </style>

@endPushOnce
