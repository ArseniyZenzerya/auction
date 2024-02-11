@extends('layouts.app')


@section('content')

    <section class="container">
        <div class="breadcrumbs">
            <a href="{{route('index')}}" class="button-return">
                <img src="{{asset('/images/icons/arrow-left-bredcrums.svg')}}" alt="">
            </a>
            <a href="{{route('index')}}">Home</a>
            <p>/</p>
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
                @if(isset($product->winnerId) && $product->winnerId == auth()->id())
                <div class="notify-succesfull">
                    Auction is won
                </div>
                @endif
                <h2>{{$product->title}}</h2>
                <div class="card">
                    <div class="card-time padding-card"><b>Auction Ends: </b>{{$product->end_time}}</div>
                    <div class="card-time-expire padding-card">
                        <p>{{$product->formatted_duration}}</p>
                        <p>till end</p>
                    </div>
                </div>
                <div class="card padding-card">
                    <p>Actual Price <a
                            href="{{route('listBid', ['auction' => $product->id])}}">{{ $product->bids->count() }}
                            bids</a></p>
                    <p class="price">{{ $product->bids->max('amount') ?? $product->start_price }} UAH</p>
                </div>
                <div class="card padding-card">
                    @if(!isset($product->winnerId))
                        @auth('web')
                            @if(auth()->id() === $product->user_id)
                                <a href="{{ route('view.edit.auction', ['auction' => $product->id]) }}"
                                   class="button edit-auction">Edit Auction</a>
                            @else
                                <form action="{{ route('addBid', ['auction' => $product->id]) }}" method="Post"
                                      class="add-bid">
                                    @csrf
                                    <p>Place a bid: </p>
                                    <input type="number" name="amount" class="bid">
                                    <p>UAH</p>
                                    <input type="submit" class="button confirm-bid" value="Confirm bid">
                                </form>
                                @if ($errors->has('amount'))
                                    <div class="alert alert-danger red">
                                        <strong>Error:</strong> {{ $errors->first('amount') }}
                                    </div>
                                @endif
                            @endif
                        @endauth
                    @else
                        <div>
                            Auction Closed
                        </div>
                    @endif

                    @guest('web')
                        <a href="{{route('login')}}">
                            <div class="button confirm-bid">
                                Confirm bid
                            </div>
                        </a>
                    @endguest
                </div>

            </div>
        </div>
        <div class="details">
            <h3 class="header-block">Details</h3>
            <p>{{$product->description}}</p>
        </div>
        <div class="comments">
            <h3 class="header-block">Comments <span>{{count($messages)}}</span></h3>
            <form method="post" action="{{ route('chat.store', ['auction' => $product->id]) }}">
                @csrf
                @if(!isset($product->winnerId))
                    <textarea name="content" rows="4" required class="chat-textarea"></textarea>
                    <br>
                    <button type="submit" class="button">Send Comment</button>
                @endif
            </form>
            <div class="chat">
                @foreach ($messages as $message)
                    <p class="chat-message"><strong>{{ $message->user }}:</strong> {{ $message->content }}</p>
                @endforeach
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
        .breadcrumbs {
            display: flex;
            margin-top: 45px;
        }

        .breadcrumbs p {
            margin: 0 10px;
        }

        .button-return {
            margin-right: 25px;
        }

        .product-main {
            display: flex;
            margin-top: 30px;
        }

        .slider-photo {
            width: 556px;
        }

        .product-desc {
            width: calc(100% - 556px);
            margin-left: 20px;
        }

        .product-desc h2 {
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

        .card-time b {
            color: rgba(0, 0, 0, 0.45);
        }

        .card-time-expire {
            width: 100%;
            border-top: 1px solid var(--border-card-color);
        }

        .price {
            margin-top: 24px;
        }

        .details {
            display: flex;
            flex-direction: column;
            margin-top: 25px;
        }

        .header-block {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .comments {
            margin-top: 85px;
        }

        .comments span {
            color: rgba(0, 0, 0, 0.45);
            margin-left: 10px;
        }


        .swiper {
            width: 100%;
            height: 100%;
            margin-right: 10px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 90%;
            object-fit: cover;
        }

        .add-bid {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .bid {
            padding: 8px 12px;
            margin: 0 16px 0 8px;
        }

        .confirm-bid {
            width: calc(100% - 20px);
            margin-left: 40px;
        }

        .card > form > p {
            width: 100%;
        }

        .chat-textarea {
            width: 100%;
            margin-bottom: 10px;
        }

        .chat {
            margin-top: 20px;
        }

        .chat-message {
            margin: 15px 10px;
        }

        .red {
            color: red;
        }

        .notify-succesfull{
            color: green;
            border: 1px solid green;
            padding: 10px;
            background: rgba(97, 234, 1, 0.28);
        }
    </style>

@endPushOnce
