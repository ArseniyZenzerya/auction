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
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($photos as $photo)
                            <div class="swiper-slide"><img src="{{ asset('storage/' . $photo->url) }}"></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="product-desc">
                <h2>{{$product->title}}</h2>
                <div class="card">
                    <div class="card-time padding-card"><b>Auction Ends: </b>{{$product->end_time}}</div>
                    <div class="card-time-expire padding-card">
{{--                        TODO: add font-size, where is it need--}}
                        <p>{{$product->formatted_duration}}</p>
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
        </div>
        <div class="comments">
            <h3 class="header-block">Comments <span>2</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et a obcaecati eos veniam odit eum,
                quibusdam aspernatur accusamus quos tempora, nemo nisi quasi dolorum vel voluptate excepturi nulla.
                Voluptatum?</p>
        </div>
    </section>
        @endsection


        @section('meta')
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content=" ">
        @endsection


        @pushonce('scripts')
            <script>
                var swiper = new Swiper(".mySwiper", {
                    spaceBetween: 30,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    mousewheel: true,
                    keyboard: true,
                });
            </script>
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
                    margin-left: 20px;
                }

                .product-desc h2{
                    width: 440px;
                    font-size: 38px;
                    margin-bottom: 18px;
                }

                .card {
                    background: var(--main-color);
                    width: 100%;
                    border: 1px solid var(--border-card-color);
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
                    border-top: 1px solid var(--border-card-color);
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



                .swiper{
                    width: 100%;
                    height: 100%;
                    margin-right: 10px;
                }
                .swiper-slide{
                    text-align: center;
                    font-size: 18px;
                    background-color: aliceblue;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .swiper-slide img{
                    width: 90%;
                    object-fit: cover;
                }

            </style>

    @endPushOnce
