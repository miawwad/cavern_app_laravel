<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class CondimentMap extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.condiments_map_MA"; 

  protected $primaryKey= "id"; 
  public function condiment(){
    return $this->hasOne(Condiment::class,'id','fkey_condiments');
  }
} 