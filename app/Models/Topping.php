<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class Topping extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.toppings_MA"; 

  protected $primaryKey= "id"; 

} 