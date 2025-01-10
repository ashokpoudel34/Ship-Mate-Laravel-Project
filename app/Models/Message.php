<?php

namespace App\Models;

use App\Models\shipmate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    public function notification()
    {
        return $this->belongsTo(shipmate::class);
    }
}
