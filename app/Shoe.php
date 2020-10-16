<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];
    public function getNameAttribute($value){
        return ucwords($value);
    }
    public function getPriceFormatAttribute(){
        return "Rp. ".number_format($this->price , 0, ',', '.');  
    }
    public function getDescriptionAttribute($value){
        return ucfirst($value);
    }
    public function getImagePathAttribute($value){
        return asset('storage/'.$this->image);  
    }
}
