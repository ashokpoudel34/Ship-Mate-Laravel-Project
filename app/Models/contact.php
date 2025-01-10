<?php

namespace App\Models;

use App\Models\shipmate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
{
    use HasFactory;
    protected $table = 'Contact';

    public function message()
    {
        return $this->belongsTo(shipmate::class);
    }
}
