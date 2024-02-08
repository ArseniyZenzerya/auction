@extends('layouts.app')


@section('content')
<div class="main_section"> 
    <div class="product-photo">
        <div class="slide active">
            <img src="{{ asset("/images/products/picture1.png") }}" height=484 width=700 >
        </div>
        <div class="slide">
            <img src="{{ asset("/images/products/picture2.png") }}" height=484 width=700 >
        </div>
        <div class="slide">
            <img src="{{ asset("/images/products/picture3.png") }}" height=484 width=700 >
        </div>
        <div class="slide">
            <img src="{{ asset("/images/products/picture4.png") }}" height=484 width=700 >
        </div>
        <div class="btn-prev" id="btn-prev">
            <img src="{{ asset("/images/icons/arrow_left.png") }}">
        </div>
        <div class="btn-next" id="btn-next">
            <img src="{{ asset("/images/icons/arrow_right.png")}}">
        </div>

    </div>

    <section class="container">
        <div class="text">
            <h2>Painted 155mm Shell to M-777 Howitzer</h2>
        </div>

        <div class="card">
        Auction Ends: 15.03.24, at 11:24 EET
        </div>

        <div class="data">
        1 Day, 11:24:03
        till end
        </div>

        <div class="price">
            actual price 4000 uah
        </div>

        <div class="number">
            button input number
            <div class="button_number">Confirm bid</div>
        </div>
        <div class="details">
        <h3>Details</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et a obcaecati eos veniam odit eum, quibusdam aspernatur accusamus quos tempora, nemo nisi quasi dolorum vel voluptate excepturi nulla. Voluptatum?</p>
        </div>
        <div class="comments">
        <h3>Comments</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et a obcaecati eos veniam odit eum, quibusdam aspernatur accusamus quos tempora, nemo nisi quasi dolorum vel voluptate excepturi nulla. Voluptatum?</p>
        </div>
    </section>
  
@endsection


@section('meta')
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content=" ">
@endsection


@pushonce('scripts')
  <script src="../js/slider.js"></script>

@endpushonce

@pushOnce('css')
    <style>
        .main_section {
            display: flex;
        }
        .card {
            background: #E6F7FF;
            width: 672px;
            height: 56px;
            border: 2px solid #69C0FF;
            margin-top: 18px;
            display: flex;
            padding: 0px 24px;
            flex-direction: column;
            align-items: flex-start;
            align-self: stretch;
        }

        .data {
            background: #E6F7FF;
            width: 672px;
            height: 110px;
            border: 2px solid #69C0FF;
            padding: 0px 24px;
        }

        .text {
        
            padding-top: 99px
        }

        .price {
            background: #E6F7FF;
            width: 672px;
            height: 134px;
            border: 2px solid #69C0FF;
            margin-top: 18px;
        }

        .number {
            background: #E6F7FF;
            width: 672px;
            height: 88px;
            border: 2px solid #69C0FF;
            margin-top: 18px;
        }

        .button_number {
            background: #2196F3;
            padding: 12px 16px;
            border-radius: 100px;
            color: #fff;
            border: none;   
            display: flex;
            align-items: center;
            justify-content: center;
        
         }

         .product_photo {
            margin-left: 36px;
            margin-top: 99px;
         }


    </style>

@endPushOnce
