<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionValues extends Model
{ 
    protected $table = "product_option_values";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $boolean = 1;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','product_id','option_id','option_value_id'
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

