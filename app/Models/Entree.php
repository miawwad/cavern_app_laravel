<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class Entree extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.Entree"; 

  protected $primaryKey= "id"; 

} 