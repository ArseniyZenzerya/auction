@extends('layouts.app')

@section('content')

    <section class="container">
        <div class="breadcrumbs">
            <a href="{{ route('index') }}" class="button-return"><img src="{{ asset('/images/icons/arrow-left-bredcrums.svg') }}" alt=""></a>
            <a href="{{ route('index') }}">Home</a>
            <p>/ Edit Auction</p>
        </div>

        <div class="edit-auction-form">
            <h2>Edit Auction</h2>

            <form action="{{ route('edit.auction', ['auction' => $product->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ $product->title }}" required>

                <label for="description">Description:</label>
                <textarea name="description" rows="4" required>{{ $product->description }}</textarea>

                <label for="start_price">Starting Price:</label>
                <input type="number" name="start_price" value="{{ $product->start_price }}" required>

                <label for="end_time">End Time:</label>
                <input type="datetime-local" name="end_time" value="{{ \Carbon\Carbon::parse($product->end_time)->format('Y-m-d\TH:i') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}" required>

                <button type="submit" class="button update-auction">Update Auction</button>
            </form>
        </div>
    </section>

@endsection

@section('meta')
    <title>Edit Auction</title>
    <meta name="description" content="">
    <meta name="keywords" content=" ">
@endsection

@pushonce('css')
    <style>
        /* ... (ваш текущий стиль) ... */

        .edit-auction-form {
            width: 50%;
            margin: 50px auto;
        }

        .edit-auction-form h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .edit-auction-form form {
            display: flex;
            flex-direction: column;
        }

        .edit-auction-form label {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .edit-auction-form input,
        .edit-auction-form textarea {
            padding: 10px;
            margin-bottom: 15px;
        }

        .update-auction {
            width: 200px;
            margin-top: 10px;
        }
    </style>
@endpushonce
