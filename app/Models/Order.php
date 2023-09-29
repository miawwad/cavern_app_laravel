<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\SoftDeletes; 

  

class Order extends Model 

{ 

  use SoftDeletes; 

  

  protected $table= "miawwad_training.dbo.orders_MA"; 

  protected $primaryKey= "id"; 

  public function entree(){
    return $this->hasOne(Entree::class, 'id', 'fkey_entree');
  }

  public function cheese(){
    return $this->hasOne(Cheese::class, 'id', 'fkey_cheese');
  }

  public function topping_maps(){
    return $this->hasMany(ToppingMap::class, 'fkey_order', 'id');
  }
  public function condiment_maps(){
    return $this->hasMany(CondimentMap::class, 'fkey_order', 'id');
  }
} 