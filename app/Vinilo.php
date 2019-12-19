<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vinilo extends Model
{
    public $table = "productos";
    public $timestamps = false;
    public $guarded = [];

    public function categoria(){
      return $this->belongsTo("App\Categoria", "categoria_id");
    }
}
