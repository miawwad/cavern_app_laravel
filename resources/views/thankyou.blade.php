@extends('template')

@section('title')
    Mohammad's Cavern App
@endsection

@section('page_title')
    The Cavern
@endsection


@section('heading')
    at <a href="https://www.roanoke.edu">Roanoke College</a>
@endsection

@section('stylesheets')
    <style>
        #thankTitle {
            color: #398dca;
            margin-bottom: 10px;
        }
        #orderTable {
            width: 400px;
        }
        table,th,td {
            border: 1px #cccccc solid;
        }
        td {
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 10px;
            vertical-align: baseline;
        }
        tr:nth-child(odd) {
            background-color: #f5f5f5;
        }
    </style>
@endsection

@section('javascript')
@endsection

@section('content')
    <html>
        <head>
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link media="all" type="text/css" rel="stylesheet" href="https://blackstone.roanoke.edu/michael/laravel5-template/resources/assets/sass/main.scss">
            <link media="all" type="text/css" rel="stylesheet" href="https://blackstone.roanoke.edu/michael/laravel5-template/resources/assets/sass/_grid.scss">
        </head>

        <body>
            <h2 id="thankTitle">Thank You For Your Order!</h2>

            <table id="orderTable">
                <tbody>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>{{ $order->name }}</td>
                    </tr>

                    <tr>
                        <td><strong>Entree</strong></td>
                        <td>{{ $order->entree->entree_name }}</td>
                    </tr>

                    <tr>
                        <td><strong>Cheese</strong></td>
                        <td>{{ $order->cheese->cheese_name }}</td>
                    </tr>

                    <tr>
                        <td><strong>Toppings</strong></td>
                        <td class="multiTops">
                            @forelse($order->topping_maps as $key => $topping)
                                {{ $topping->topping->topping_name}}
                                <br>
                            @empty
                                No Toppings
                            @endforelse
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Condiments</strong></td>
                        <td class="multiTops">
                            @forelse($order->condiment_maps as $key => $condiment)
                                {{ $condiment->condiment->condiments_name }}
                                <br>
                            @empty
                                No Condiments
                            @endforelse
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Fries</strong></td>
                        <td>
                            @if ($order->fries == "on")
                                Yes
                            @else
                                No
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>

        </body>
    </html>
@endsection
