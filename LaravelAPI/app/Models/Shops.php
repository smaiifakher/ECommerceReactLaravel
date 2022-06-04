<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{ 
    protected $table = "shops";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $boolean = 1;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','market_id','name','address','product_types_count','products_count','views','photo','status'
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

