<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteTitle extends Model
{
    use HasFactory;
    protected $table = 'WebsiteTitles';


    public function user()
    {
        return $this->belongsTo(shipmate::class);
    }
}
