<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class Cheese extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.cheeses_MA"; 

  protected $primaryKey= "id"; 

} 