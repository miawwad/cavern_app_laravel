<?php 

namespace App\Http\Controllers; 

  

use Illuminate\Http\Request; 

use RCAuth; 

use Carbon\Carbon; 

  

class CavernController extends Controller 

{  

  public function __construct(){ 

    $side_navigation = [ 

      '<span class="far fa-home"></span> Home Page' => action([CavernController::class, 'index']), 

      '<span class="far fa-list"></span> Order Form' => action([OrderController::class, 'order']) 

    ]; 

  

    view()->share('side_navigation', $side_navigation); 

  } 

  public function index(){ 

    return view()->make('index'); 
    
    }
    
    public function secretBase(){
      return view()->make('secretbase');
    }

} 