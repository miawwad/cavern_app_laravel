<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class Condiment extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.condiments_MA"; 

  protected $primaryKey= "id"; 

} 