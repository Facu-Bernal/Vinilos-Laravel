<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  public $table = "categorias";
  public $timestamps = false;
  public $guarded = [];

  public function vinilos(){
    return $this->hasMany("App\Vinilo", "categoria_id");
  }

}
