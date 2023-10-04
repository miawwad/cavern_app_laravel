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
        #btn3 {
            padding-top: 0.01px;
            padding-bottom: 0.01px;
            padding-left: 0.01px;
            font-size: 0.01px
        }
    </style>
@endsection

@section('content')
<link rel="stylesheet" href="index.css">
<html lang="en">

<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link media="all" type="text/css" rel="stylesheet"
        href="https://blackstone.roanoke.edu/michael/laravel5-template/resources/assets/sass/_grid.scss">

    <link media="all" type="text/css" rel="stylesheet"
        href="https://blackstone.roanoke.edu/michael/laravel5-template/resources/assets/sass/main.scss">


</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col">
                <img src="{{asset('Captures/Capture.jpg')}}"  alt="Nature" />
            </div>

            <div class="col">
                <h2>Eat and Run!</h2><br>
                <button id="btn3" type="button"
                onclick="window.location = `{{action([App\Http\Controllers\CavernController::class, 'secretBase'])}}`;">secret</button>
                <p> Cavern, our "grab and go" eatery located on the lower level of the Colket Center, is operated by
                    RC
                    Dining Services.
                    Guests can purchase drinks, burgers, salads, wraps, subs, etc., or use the meal plan to obtain lunch
                    or
                    dinner Monday through Friday from 11:00 am to 11:00 pm and Saturday evenings from 5:00 pm to 11:00
                    pm.
                    "Trade Meals" are designed as meal equivalents for those on the meal plan.<br><br>
                    The Cavern also offers staging, lighting and sound systems to accommodate dances, karaoke, bingo,
                    poetry
                    readings and any other events organized by the college community.
                </p>


                <button id="btn1" type="button"
                    onclick="window.location = 'https://www.roanoke.edu/inside/a-z_index/dining_services/the_cavern/cavern_menu';">View
                    Menu</button>
                <button id="btn2" type="button"
                    onclick="window.location = `{{action([App\Http\Controllers\OrderController::class, 'order'])}}`;">Place
                    Order</button>
            </div>
        </div>
    </div><br>

    <div class="container">


        <div class="row">


            <div class="col">

                <table class="table table-striped">

                    <thead class="thead">
                        <h4 id="cav">Cavern Hours</h4>
                        <tr class="tr1">
                            <th id="day">
                                <br>
                                <b>Day</b>

                            </th>
                            <th id="Hours">
                                <br>
                                <b>Hours</b>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr">
                            <td>
                                <b>Monday</b>
                            </td>
                            <td>11:00 am to 11:00 pm</td>
                        </tr>
                        <tr class="tr">
                            <td>
                                <b>Tuesday</b>
                            </td>
                            <td>11:00 am to 11:00 pm</td>
                        </tr>
                        <tr class="tr">
                            <td>
                                <b>Wednesday</b>
                            </td>
                            <td>11:00 am to 11:00 pm</td>
                        </tr>
                        <tr class="tr">
                            <td>
                                <b>Thursday</b>
                            </td>
                            <td>11:00 am to 11:00 pm</td>
                        </tr>
                        <tr class="tr">
                            <td>
                                <b>Friday</b>
                            </td>
                            <td>11:00 am to 11:00 pm</td>
                        </tr>
                        <tr class="tr">
                            <td>
                                <b>Saturday</b>
                            </td>
                            <td>5:00 pm to 11:00 pm</td>
                        </tr>
                        <tr class="tr">
                            <td colspan="100%">
                                <b>Closed Sunday</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <img class="food" src="{{asset('Captures/Capture2.jpg')}}"  alt="Nature" />
            </div>

        </div>

    </div>


</body>

</html>
@endsection