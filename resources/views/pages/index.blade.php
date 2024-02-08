@extends('layouts.app')


@section('content')
    <section class="index-page-body container">
        <div class="index-text">
            <div class="index-text-bigger">Металоконструкції в Запоріжжі
                <span class="index-text-smaller">будь-якої складності</span>
            </div>
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
        .index-text {
            font-family: 'Neue Machina Regular';
            display: flex;
        }

        .index-page-body {
            margin-top: 100px;
        }

        .index-text-bigger {
            font-size: 96px;
            font-weight: 700;
        }

        .index-text-smaller {
            font-size: 40px;
            font-weight: 400;
            color: #F18119;
        }
    </style>

@endPushOnce
