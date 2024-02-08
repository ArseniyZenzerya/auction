@extends('layouts.app')


@section('content')
    <section class="container">
        <div class="breadcrumbs">
            <a href="" class="button-return"><img src="{{asset('/images/icons/arrow-left-bredcrums.svg')}}" alt=""></a>
            <a>Home</a>
            <p>/</p>
            <a>Category</a>
        </div>
        <div class="product-main">
            <div class="slider-photo">

            </div>
            <div class="product-desc">
                <h2>Painted 155mm Shell to M-777 Howitzer</h2>
                <div class="card">
                    <div class="card-time padding-card"><b>Auction Ends:</b> 15.03.24, at 11:24 EET</div>
                    <div class="card-time-expire padding-card">
{{--                        TODO: add font-size, where is it need--}}
                        <p>1 Day, 11:24:03</p>
                        <p>till end</p>
                    </div>
                </div>
                <div class="card padding-card">
                    {{--                        TODO: add font-size, where is it need--}}
                    <p>Actual Price <a href="">(12 bids)</a></p>
                    <p class="price">4.002 UAH</p>
                </div>
                <div class="card padding-card"></div>

            </div>
        </div>
        <div class="details">
            <h3 class="header-block">Details</h3>
{{--        TODO:    Dasha zagugli pls v html est` block kotoriy c vkladkami tipo i vstav syda --}}
        </div>
        <div class="comments">
            <h3 class="header-block">Comments <span>2</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et a obcaecati eos veniam odit eum,
                quibusdam aspernatur accusamus quos tempora, nemo nisi quasi dolorum vel voluptate excepturi nulla.
                Voluptatum?</p>
        </div>
    </section>
{{--        <div class="product-photo">--}}
{{--            <div class="slide active">--}}
{{--                <img src="{{ asset("/images/products/picture1.png") }}" height=484 width=700>--}}
{{--            </div>--}}
{{--            <div class="slide">--}}
{{--                <img src="{{ asset("/images/products/picture2.png") }}" height=484 width=700>--}}
{{--            </div>--}}
{{--            <div class="slide">--}}
{{--                <img src="{{ asset("/images/products/picture3.png") }}" height=484 width=700>--}}
{{--            </div>--}}
{{--            <div class="slide">--}}
{{--                <img src="{{ asset("/images/products/picture4.png") }}" height=484 width=700>--}}
{{--            </div>--}}
{{--            <div class="btn-prev" id="btn-prev">--}}
{{--                <img src="{{ asset("/images/icons/arrow_left.png") }}">--}}
{{--            </div>--}}
{{--            <div class="btn-next" id="btn-next">--}}
{{--                <img src="{{ asset("/images/icons/arrow_right.png")}}">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--            <div class="details">--}}
{{--                <h3>Details</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et a obcaecati eos veniam odit eum,--}}
{{--                    quibusdam aspernatur accusamus quos tempora, nemo nisi quasi dolorum vel voluptate excepturi nulla.--}}
{{--                    Voluptatum?</p>--}}
{{--            </div>--}}
{{--            <div class="comments">--}}
{{--                <h3>Comments</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et a obcaecati eos veniam odit eum,--}}
{{--                    quibusdam aspernatur accusamus quos tempora, nemo nisi quasi dolorum vel voluptate excepturi nulla.--}}
{{--                    Voluptatum?</p>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        --}}

        @endsection


        @section('meta')
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content=" ">
        @endsection


        @pushonce('scripts')
            <script src="{{asset("/js/slider.js")}}"></script>

        @endpushonce

        @pushOnce('css')
            <style>
                .breadcrumbs{
                    display: flex;
                    margin-top: 45px;
                }

                .breadcrumbs p{
                    margin: 0 10px;
                }

                .button-return{
                    margin-right: 25px;
                }

                .product-main{
                    display: flex;
                    margin-top: 30px;
                }

                .slider-photo{
                    width: 556px;
                }

                .product-desc{
                    width: calc(100% - 556px);
                }

                .product-desc h2{
                    width: 440px;
                    font-size: 38px;
                    margin-bottom: 18px;
                }

                .card {
                    background: #E6F7FF;
                    width: 100%;
                    border: 1px solid #69C0FF;
                    margin-bottom: 18px;
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                    align-self: stretch;
                }

                .padding-card {
                    padding: 16px 24px;
                }

                .card-time b{
                    color: rgba(0,0,0, 0.45);
                }

                .card-time-expire{
                    width: 100%;
                    border-top: 1px solid #69C0FF;
                }
                .price {
                    margin-top: 24px;
                }

                .details{
                    display: flex;
                    flex-direction: column;
                }

                .header-block{
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 30px;
                }

                .comments{
                    margin-top: 85px;
                }

                .comments span{
                    color: rgba(0, 0, 0, 0.45);
                    margin-left: 10px;
                }

            </style>

    @endPushOnce
