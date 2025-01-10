<?php

namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Giftshop extends Authenticatable
    {
        use Notifiable;
        use HasFactory;
        protected $table = 'giftshop';
        protected $primaryKey = 'id';
        public $timestamps = true;

    /**
     * Get the User that owns the giftshop users.
     */

     public function giftshopuser()
     {
         return $this->belongsTo(shipmate::class);
     }

        protected $guard = 'giftshop';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
