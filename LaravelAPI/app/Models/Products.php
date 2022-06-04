<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{ 
    protected $table = "products";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $boolean = 1;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','product_type_id','category_id','market_id','shop_id','country_id','name','price','discount_price','discount','quantity','views','likes','sort_order','status'
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    use HasFactory;
}

