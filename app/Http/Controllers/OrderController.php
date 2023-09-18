<?php 

namespace App\Http\Controllers; 
use App\Models\Topping; 
use App\Models\Cheese;
use App\Models\Condiment;
use App\Models\Entree;

use Illuminate\Http\Request; 

use RCAuth; 

use Carbon\Carbon; 

  

class OrderController extends Controller 

{  

  public function __construct(){ 

    $side_navigation = [ 

      '<span class="far fa-home"></span> Home Page' => action([CavernController::class, 'index']), 

      '<span class="far fa-list"></span> Order Form' => action([OrderController::class, 'order']) 

    ]; 

  

    view()->share('side_navigation', $side_navigation); 

  } 

  public function order(){ 

    $toppings = Topping::get();
    $cheeses = Cheese::get();
    $condiments = Condiment::get(); 
    $entrees = Entree::get();
    return view()->make('order', compact('toppings', 'condiments', 'cheeses', 'entrees')); 
    
    } 

    public function storeOrder(Request $request){
      dd($request);
    }

} 