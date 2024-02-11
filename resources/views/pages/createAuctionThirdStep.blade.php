@extends('layouts.app')


@section('content')
    @include('inc.auth.status', ['step'=> 3])

    <section class="container center">
        <div class="center">
            <h3>How auction will happen?</h3>
            <form action="{{route('createThirdStep')}}" class="first-create" id="create-auction" method="post"
                  enctype="multipart/form-data">
                @csrf
                <label for="num_duration">Duration</label>
                <div class="duration-block">
                    <input type="number" min="1" name="num_duration" class="duration">
                    <select name="duration">
                        <option value="day">Days</option>
                        <option value="week">Weeks</option>
                        <option value="month">Months</option>
                    </select>
                </div>
                <label for="price">Starting price</label>
                <input type="number" name="price" min="0">
                <input type="hidden" value="{{session('id')}}" name="id">
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
            width: 180px;
            flex-direction: column;
        }


        input {
            padding: 8px 12px;
            margin-bottom: 16px;
        }

        label {
            margin-bottom: 8px;
        }

        .first-create > div > select {
            width: 70px;
            height: 36px;
            margin-left: 10px;
        }

        .duration{
            width: 100%;
        }

        .duration-block{
            display: flex;
        }


    </style>

@endPushOnce
