@extends('template')
@section('title')
    Place Order!
@endsection

@section('page_title')
    The Cavern
@endsection
@section('heading')
    Order Form
@endsection
@section('javascript')
@endsection

@section('content')
<link rel="stylesheet" href="order.css">
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link media="all" type="text/css" rel="stylesheet"
            href="https://blackstone.roanoke.edu/michael/laravel5-template/resources/assets/sass/_grid.scss">

        <link media="all" type="text/css" rel="stylesheet"
            href="https://blackstone.roanoke.edu/michael/laravel5-template/resources/assets/sass/main.scss">

        <script>
            $(document).ready(function() {
                $("#options").hide();
                $("input.pick").change(function() {
                    var selectedOption = $(this).attr("id");
                    $(".sandwich, .wrap").hide();
                    $("." + selectedOption).show();
                });
                $(".pick").click(function() {
                    $("#options").show();
                });
            });

        </script>
    </head>

    <body>
        <div class="container-fluid">

            <form name="myForm" action="{{ action([App\Http\Controllers\OrderController::class, 'storeOrder']) }}"
                 method="post">
                {{csrf_field()}}
                <div>
                    <div class="grid-1">
                        <div class="grid-item">
                            <label for="entree"><b>Entree</b></label><br>
                            <div class="form-check">
                                <input class="form-check-input pick" type="radio" name="choose" id="sandwich" required>
                                <label class="form-check-label" for="sandwich">
                                    Burger/Sandwich
                                </label>
                            </div><br>
                            <div class="form-check">
                                <input class="form-check-input pick" type="radio" name="choose" id="wrap" required>
                                <label class="form-check-label" for="wrap">
                                    Wrap
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="options">
                    <div class="grid-2">
                        <div class="grid-item">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" id="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="grid-item">
                            <label for="eat" class="form-label">Type</label>
                            <select name="entree" id="entree" class="form-select" aria-label="Default" required>
                                <option value="none" selected disabled hidden>Select an Option</option>
                                @foreach($entrees as $key => $entree)
                                <option class="{{$entree->entree_type}}" value="{{$entree->id}}">{{$entree->entree_name}}</option>
                                @endforeach
                            </select><br>
                        </div>
                    </div>
                    <hr>
                    <label for="condiments">Condiments</label><br>
                    <div class="grid-3">
                        
                            @foreach($condiments as $key => $condiment)
                            <div>
                                <input name="{{$condiment->condiments_name}}" type="checkbox" id="{{$condiment->condiments_name}}" class="form-check-input">
                                <label for="{{$condiment->condiments_name}}" class="form-check-label">{{$condiment->condiments_name}}</label><br>
                            </div>
                            @endforeach
                       
                    </div>
                    <hr>


                    <div class="grid-2">
                        <div class="grid-item">
                            <label for="Toppings">Toppings</label><br>

                            @foreach($toppings as $key => $topping)
                            <label for="{{$topping->topping_name}}" class="form-check-label">
                            <input for="{{$topping->topping_name}}" type="checkbox" value="{{$topping->id}}">{{$topping->topping_name}}
                            </label><br>
                            @endforeach
                            
                        </div>

                        <div class="grid-item">
                            <label for="Cheese">Cheese</label><br>
            
                                    @foreach($cheeses as $key => $cheese)
                                    <label for="{{$cheese->cheese_name}}" class="form-check-label">
                                    <input class="{{$cheese->cheese_name}}" value="{{$cheese->id}}" type = "radio" required>{{$cheese->cheese_name}}
                                    </label><br>
                                    @endforeach
                                        
                            
                            <br><br>
                            <label for="Fries">Fries</label><br>
                            <label for="Yes" class="form-check-label">
                                <input name="yesno" Type="radio" id="Yes" class="form-check-input" required>Yes
                            </label><br>
                            <label for="No" class="form-check-label">
                                <input name="yesno" Type="radio" id="No" class="form-check-input" required>No
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div id="btn">
                        <button type="submit-order" value="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <hr>
                </div>
            </form>
        </div>


    </body>

    </html>
@endsection
