<?php 

namespace App\Http\Controllers; 
use App\Models\Topping; 
  

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

    dd($toppings); 

    return view()->make('order');
    
    
    
    } 

} 