<?php

namespace App\Models;

use App\Models\contact;
use App\Models\Message;
use App\Models\Giftshop;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class shipmate extends Model
{
    use HasFactory;

    protected $table = 'shipmate';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get the Products for the shipmate user.
     */

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    /**
     * Get the NOtifications for the shipmate user.
     */
    public function notifications()
    {
        return $this->hasMany(contact::class);
    }

    /**
     * Get the Messages for the shipmate user.
     */

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get the Website Titles for the shipmate user.
     */
    public function titles()
    {
        return $this->hasMany(WebsiteTitle::class);
    }

        /**
     * Get the Giftshop Users for the shipmate user.
     */
    public function giftshopusers()
    {
        return $this->hasMany(Giftshop::class);
    }

}
