<?php 

namespace App\Http\Controllers; 
use App\Models\Topping; 
use App\Models\Cheese;
use App\Models\Condiment;
use App\Models\Entree;
use App\Models\Order;
use App\Models\ToppingMap;
use App\Models\CondimentMap;

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

    public function storeOrder(Request $request) {
      
      $validated = $request->validate([ 

        'entree_type' => ['required', 'string'], 
  
        'name' => ['required', 'string', 'max:50'], 
  
        'entree' => ['required', 'integer'], 
  
        'cheese' => ['required', 'integer'], 
  
        'fries' => ['required', 'string'], 
  
        'toppings.*' => ['integer'], 
  
        'condiments.*' => ['integer'] 
  
      ]); 

      $order = new Order;
      $order->name = $request->name;
      $order->fkey_entree = $request->entree;
      $order->fkey_cheese = $request->cheese;
      $order->fries = ($request->fries == "on" ? 1 : 0);

      if (RCAuth::check() || RCAuth::attempt()) {
        $rcid = RCAuth::user()->rcid;
    }
      $order->created_by = $order->updated_by = $rcid;

      $order->save();

      if(!empty($request->toppings)){
        foreach($request->toppings as $key => $topping){
          $topping_map = new ToppingMap;

          $topping_map->fkey_order = $order->id;
          $topping_map->fkey_topping = $topping;
          
          $topping_map->created_by = $topping_map->updated_by = $rcid;
          
          $topping_map->save();
        }
      }
      
      if(!empty($request->condiments)){
        foreach($request->condiments as $key => $condiment){
          $condiment_map = new CondimentMap;

          $condiment_map->fkey_order = $order->id;
          $condiment_map->fkey_condiments = $condiment;
          
          $condiment_map->created_by = $condiment_map->updated_by = $rcid;
          
          $condiment_map->save();
        }
      }
      return redirect()->action([OrderController::class,'thankYou'],['id'=> $order->id]);
    }
    public function thankYou($id)
    {
      $order = Order::with(['entree', 'cheese', 'topping_maps.topping', 'condiment_maps.condiment'])->find($id);
  
      return view()->make('thankyou', compact('order'));
    }

} 