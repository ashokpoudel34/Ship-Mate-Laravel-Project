<?php

namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class seller extends Authenticatable
    {
        use Notifiable;
        use HasFactory;
        protected $table = 'seller';
        protected $primaryKey = 'id';
        public $timestamps = true;

        protected $guard = 'shipmate';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
