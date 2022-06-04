<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{ 
    protected $table = "options";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $boolean = 1;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','product_type_id','name'
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

