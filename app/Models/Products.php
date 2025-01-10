<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'Products';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get the User that owns the Product.
     */

     public function user()
     {
         return $this->belongsTo(shipmate::class);
     }
}
