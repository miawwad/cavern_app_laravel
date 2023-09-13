<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class Order extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.orders_MA"; 

  protected $primaryKey= "id"; 

} 