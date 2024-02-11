@extends('layouts.app')


@section('content')
    @include('inc.auth.status', ['step'=> 2])

    <section class="container center">
        <div class="center">
            <h3>Cover photo</h3>
            <form action="{{route('createSecondStep')}}" class="first-create" id="create-auction" method="post" enctype="multipart/form-data">
                @csrf
                <label for="photos">Photos:</label>
                <input type="hidden" value="{{session('id')}}" name="id">
                <input type="file" name="photos[]" id="photos" multiple>
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
