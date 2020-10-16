<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transaction_id', 'shoe_id', 'quantity'
    ];
    public function Shoe(){
        return $this->belongsTo(Shoe::class, "shoe_id");
    }
}
