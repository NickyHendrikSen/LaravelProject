<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TransactionDetail;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'date'
    ];
    public function Detail(){
        return $this->hasMany(TransactionDetail::class, "transaction_id");
    }
    public function countPrice($details){
        $total = 0;
        foreach($details as $detail){
            $total += $detail->Shoe->price * $detail->quantity;
        }
        return "Rp. ".number_format($total , 0, ',', '.');
    }

}
