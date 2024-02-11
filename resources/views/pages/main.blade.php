@extends('layouts.app')


@section('content')
<section class="container">
        <div class="name">
            <h1>All lots</h1>
        </div>
    <div class="row">
        <div class="card">
            <div class="title">
                <h2>Souvenir Coin “Fighter Jet - Su-27</h2>
            </div>
            <div class="img-box">
                <img src="./images/products/product.png" class="img-box__img">
            </div>
            <div class="content">
                <h3 class="title">320 UAH</h3>
                <p class="data">ends in 1 day </p>
            </div>
        </div>

        <div class="card">
            <div class="title">
                <h2>Souvenir Coin “Fighter Jet - Su-27</h2>
            </div>
            <div class="img-box">
                <img src="./images/products/product.png" class="img-box__img">
            </div>
            <div class="content">
                <h3 class="title">320 UAH</h3>
                <p class="data">ends in 1 day </p>
            </div>
        </div>

        <div class="card">
            <div class="title">
                <h2>Souvenir Coin “Fighter Jet - Su-27</h2>
            </div>
            <div class="img-box">
                <img src="./images/products/product.png" class="img-box__img">
            </div>
            <div class="content">
                <h3 class="title">320 UAH</h3>
                <p class="data">ends in 1 day </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="title">
                <h2>Souvenir Coin “Fighter Jet - Su-27</h2>
            </div>
            <div class="img-box">
                <img src="./images/products/product.png" class="img-box__img">
            </div>
            <div class="content">
                <h3 class="title">320 UAH</h3>
                <p class="data">ends in 1 day </p>
            </div>
        </div>

        <div class="card">
            <div class="title">
                <h2>Souvenir Coin “Fighter Jet - Su-27</h2>
            </div>
            <div class="img-box">
                <img src="./images/products/product.png" class="img-box__img">
            </div>
            <div class="content">
                <h3 class="title">320 UAH</h3>
                <p class="data">ends in 1 day </p>
            </div>

        </div>

        <div class="card">
            <div class="title">
                <h2>Souvenir Coin “Fighter Jet - Su-27</h2>
            </div>
            <div class="img-box">
                <img src="./images/products/product.png" class="img-box__img">
            </div>
            <div class="content">
                <h3 class="title">320 UAH</h3>
                <p class="data">ends in 1 day </p>
            </div>
        </div>
    </div>
    <div class="pagination">
    <a href="#">❮</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">❯</a>
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

.container {
    max-width: 1200px;
    margin: auto;
    padding: 42px 135px 41px ;
    text-align: center;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-left: -24px;

}

.card {
    width: calc(33% - 24px);
    margin-left: 24px;
    display: inline-block;
    vertical-align: top;
    height: max-content;
    border: 1px solid black;
    overflow: hidden;
    margin-bottom: 24px;
}

.img-box {
   ;
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

.pagination a:hover:not(.active) {background-color: #ddd;}
    </style>

@endPushOnce
