@extends('layouts.app')


@section('content')
    <section class="container">
        <div class="main-bl">
            <div class="sorting">

            </div>
            <div>
                <div class="name">
                    <h1>All lots</h1>
                </div>
                <div class="main-blocks">
                    @foreach($auctions as $auction)
                        <a href="{{route('product', ['auction' => $auction->id])}}">
                            <div class="card">
                                <div class="title">
                                    <h2>{{$auction->title}}</h2>
                                </div>
                                <div class="img-box">
                                    @if(isset($auction->photos[0]->url))
                                    <img src="{{ asset('storage/' . $auction->photos[0]->url) }}" class="img-box__img">
                                    @endif
                                </div>
                                <div class="content">
                                    <h3 class="title">{{$auction->start_price}} UAH</h3>
                                    <p class="data">ends in 1 day </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                {{--                <div class="pagination">--}}
                {{--                    <a href="#">❮</a>--}}
                {{--                    <a href="#">1</a>--}}
                {{--                    <a class="active" href="#">2</a>--}}
                {{--                    <a href="#">3</a>--}}
                {{--                    <a href="#">4</a>--}}
                {{--                    <a href="#">5</a>--}}
                {{--                    <a href="#">6</a>--}}
                {{--                    <a href="#">❯</a>--}}
                {{--                </div>--}}
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
        .name {
            text-align: left;
            margin-bottom: 24px;
        }


        .main-blocks {
            display: flex;
            flex-wrap: wrap;
        }

        .card {
            margin-right: 10px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
            height: max-content;
            border: 1px solid #F0F0F0;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .img-box {;
        }

        .img-box__img {
            max-width: 100%;
            width: 100%;
            vertical-align: top;
        }

        .content {
            padding-bottom: 8px;
            text-align: left;
        }

        .title {
            padding: 16px 24px;
        }

        .data {
            padding-left: 24px;
            padding-bottom: 24px;
        }

        .text {
            margin-top: 0;
        }

        .friends {
            padding: 16px 9px;
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .number-friends {
            color: #858585;
            height: max-content;
            width: max-content;
            margin: 0;
            line-height: normal;
            margin-left: 12px;
        }

        .line::before {
            background-color: black;
            content: "";
            position: absolute;
            left: 0;
            height: 1px;
            width: 100%;
            top: 0;
        }

        .pagination {
            display: inline-block;
            padding: 32px;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            margin: 0 8px;
            border: 1px solid #ddd;
            text-decoration: none;
            border-radius: 5px
        }

        .pagination a:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .pagination a:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .pagination a.active {
            border-color: #1890FF

        }

        .sorting {
            width: 200px;
        }

        .main-bl {
            display: flex;
            margin-top: 30px;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>

@endPushOnce
