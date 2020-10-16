<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shoe;

class Cart extends Model
{
    
    protected $fillable = [
        'user_id', 'shoe_id', 'quantity'
    ];

    public function Shoe(){
        return $this->belongsTo(Shoe::class, "shoe_id");
    }
}
