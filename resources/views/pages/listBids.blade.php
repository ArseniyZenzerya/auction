@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="wrap-bids">
            <h1>Bids for Auction: {{ $auction->title }}</h1>

            <table class="bids-table">
                <thead>
                <tr>
                    <th>Time</th>
                    <th>Bid</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bids as $bid)
                    <tr>
                        <td>{{ $bid->created_at }}</td>
                        <td>{{ $bid->amount }} UAH</td>
                        <td>{{ $bid->user->username }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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

        .bids-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .bids-table th, .bids-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .bids-table th {
            background-color: #f2f2f2;
        }

        .bids-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .wrap-bids{
            margin-top: 30px;
        }


    </style>

@endPushOnce
