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
            <h2 id="thankTitle">YOU HAVE FOUND THE SECRET PAGE!</h2>
            <h3>you get to be tickled hehehe</h3>
            <img class="food" src="{{asset('Captures/Capture4.jpg')}}"  alt="Nature" />
        </body>
    </html>
@endsection